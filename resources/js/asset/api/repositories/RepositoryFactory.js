import CodeRepository from './CodeRepository';


const repositories = {
    'codes': CodeRepository,

}
export default {
    get: name => repositories[name]
};