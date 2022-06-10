<?php
namespace App\Repositories\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
use App\Repositories\Eloquent\RepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use FFI\Exception;
abstract class RepositoryEloquent implements RepositoryInterface
{
    protected $model;
    protected $app;
    protected $guards;
    protected $user;
    public function __construct()
    {
        $this->app = new App();
        $this->makeModel();
    }
    /**
     * to call relationship in model
     *
     * @return relationship
    */
    public function __call($method, $args)
    {
        $model = $this->model;
        if ($method == head($args)) {
            $this->model = call_user_func_array([$model, $method], array_diff($args, [head($args)]));
            return $this;
        }
        if (!$model instanceof Model) {
            $model = $model->first();
            if (!$model) {
                throw new ModelNotFoundException();
            }
        }
        $this->model = call_user_func_array([$model, $method], $args);
        return $this;
    }
    /**
     * to call eager loading
     *
     * @return collection
    */
    public function __get($name)
    {
        $model = $this->model;
        if (!$model instanceof Model) {
            $model = $model->first();
            if (!$model) {
                throw new ModelNotFoundException();
            }
        }
        return $model->$name;
    }
    abstract public function model();
    public function setGuard($guard = null)
    {
        $this->guard = $guard;
        $this->user = Auth::guard($this->guard)->user();
        return $this;
    }
    public function makeModel()
    {
        $model = $this->app->make($this->model());
        if (!$model instanceof Model) {
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        return $this->model = $model;
    }
    /**
     * function all to get all data of model.
     *
     * @return void
    */
    public function all()
    {
        return $this->model->all();
    }
    /**
     * to get columns that delete used soft delete.
     *
     * @return void
    */
    public function withTrashed()
    {
        $this->model = $this->model->withTrashed();
        return $this;
    }
    /**
    * to get column that delete used soft delete.
     *
     * @return void
    */
    public function onlyTrashed()
    {
        $this->model = $this->model->onlyTrashed();
        return $this;
    }
    /**
     * to get lists columns.
     *
     * @return void
    */
    public function lists($column, $key = null)
    {
        $model = $this->model->pluck($column, $key);
        $this->makeModel();
        return $model;
    }
    public function paginate($limit = null, $columns = ['*'])
    {
        $limit = $limit ?: config('setting.paginate');
        $model = $this->model->paginate($limit, $columns);
        $this->makeModel();
        return $model;
    }
    public function find($id, $columns = ['*'])
    {
        $model = $this->model->find($id, $columns);
        if (!$model) {
            throw new ModelNotFoundException('Model not found with id:' . $id, 404);
        }
        $this->makeModel();
        return $model;
    }
    public function findOrFail($id, $columns = ['*'])
    {
        try {
            $model = $this->model->findOrFail($id, $columns);
            $this->makeModel();
            return $model;
        } catch (ModelNotFoundException $e) {
            throw new ModelNotFoundException('Model not found with id:' . $id, 404);
        }
    }
    public function whereIn($column, $values)
    {
        $values = is_array($values) ? $values : [$values];
        $this->model = $this->model->whereIn($column, $values);
        return $this;
    }
    public function orWhere($column, $operator = null, $value = null)
    {
        $this->model = $this->model->orWhere($column, $operator, $value);
        return $this;
    }
    public function orWhereIn($column, $values)
    {
        $values = is_array($values) ? $values : [$values];
        $this->model = $this->model->orWhereIn($column, $values);
        return $this;
    }
    public function where($conditions, $operator = null, $value = null)
    {
        $this->model = $this->model->where($conditions, $operator, $value);
        return $this;
    }
    public function whereBetween($colunm, $values)
    {
        $this->model = $this->model->whereBetween($colunm, $values);
        return $this;
    }
    public function whereNotIn($colunm, $values)
    {
        $this->model = $this->model->whereNotIn($colunm, $values);
        return $this;
    }
    public function whereNull($colunm)
    {
        $this->model = $this->model->whereNull($colunm);
        return $this;
    }
    public function whereNotNull($colunm)
    {
        $this->model = $this->model->whereNotNull($colunm);
        return $this;
    }
    public function whereHas($relationships, $function)
    {
        $this->model = $this->model->whereHas($relationships, $function);
        return $this;
    }
    public function insertGetId($input)
    {
        $model = $this->model->insertGetId($input);
        $this->makeModel();
        return $model;
    }
    public function create($input)
    {
        $model = $this->model->create($input);
        $this->makeModel();
        return $model;
    }
    public function firstOrCreate($input)
    {
        $model = $this->model->firstOrCreate($input);
        $this->makeModel();
        return $model;
    }
    public function multiCreate($input)
    {
        $model = $this->model->insert($input);
        $this->makeModel();
        return $model;
    }
    public function update($id, $input)
    {
        $model = $this->model->where('id', $id)->update($input);
        $this->makeModel();
        return $model;
    }
    public function multiUpdate($column, $value, $input)
    {
        $value = is_array($value) ? $value : [$value];
        $model = $this->model->whereIn($column, $value)->update($input);
        $this->makeModel();
        return $model;
    }
    public function delete($ids)
    {
        $ids = is_array($ids) ? $ids : [$ids];
        $model = $this->model->whereIn('id', $ids)->delete();
        $this->makeModel();
        return $model;
    }
    public function forceDelete($ids)
    {
        $ids = is_array($ids) ? $ids : [$ids];
        $model = $this->model->whereIn('id', $ids)->forceDelete();
        $this->makeModel();
        return $model;
    }
    public function orderBy($column, $option = 'asc')
    {
        $model = $this->model->orderBy($column, $option);
        $this->makeModel();
        return $model;
    }
    public function join($tableName, $tableColumn, $modelColumn, $option = '')
    {
        switch ($option) {
            case 'leftJoin':
                $this->model = $this->model->leftJoin($tableName, $tableColumn, $modelColumn);
                break;
            case 'rightJoin':
                $this->model = $this->model->rightJoin($tableName, $tableColumn, $modelColumn);
                break;
            default:
                $this->model = $this->model->join($tableName, $tableColumn, $modelColumn);
        }
        return $this;
    }
    public function groupBy($colunms)
    {
        $colunms = is_array($colunms) ? $colunms : [$colunms];
        $this->model = $this->model->groupBy($colunms);
        return $this;
    }
    public function count()
    {
        $model = $this->model->count();
        $this->makeModel();
        return $model;
    }
    public function first($columns = ['*'])
    {
        $model = $this->model->first($columns);
        $this->makeModel();
        return $model;
    }
    public function with($relationships)
    {
        if (is_string($relationships)) {
            $relationships = func_get_args();
        }
        $this->model = $this->model->with($relationships);
        return $this;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function get()
    {
        $model = $this->model->get();
        $this->makeModel();
        return $model;
    }
    public function select($columns = ['*'])
    {
        $columns = is_array($columns) ? $columns : func_get_args();
        $this->model = $this->model->select($columns);
        return $this;
    }
    public function take($limit)
    {
        $this->model = $this->model->take($limit);
        return $this;
    }
    public function pluck($column, $key = null)
    {
        $model = $this->model->pluck($column, $key);
        $this->makeModel();
        return $model;
    }
}