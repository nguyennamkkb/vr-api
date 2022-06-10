<?php

namespace App\Repositories;

use App\Http\Requests\BiometricRequest;
use App\Interfaces\BiometricInterface;
use App\Traits\ResponseAPI;
use App\Models\Biometric;
use Illuminate\Support\Facades\DB;

class BiometricRepository implements BiometricInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllBiometrics()
    {
        try {
            $biometrics = Biometric::all();
            return $this->success("All Biometrics", $biometrics);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getBiometricById($id)
    {
        try {
            $biometrics = Biometric::find($id);
            
            // Check the Biometric
            if(!$biometrics) return $this->error("No Biometric with ID $id", 404);

            return $this->success("Biometric Detail", $biometrics);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestBiometric(BiometricRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If Biometric exists when we find it
            // Then update the Biometric
            // Else create the new one.
            $biometrics = $id ? Biometric::find($id) : new Biometric;

            // Check the Biometric 
            if($id && !$biometrics) return $this->error("No Biometric with ID $id", 404);

            $biometrics->data = $request->data;
            // Remove a whitespace and make to lowercase
           
            
            // I dont wanna to update the password, 
            // Password must be fill only when creating a new Biometric.
            // if(!$id) $biometrics->password = \Hash::make($request->password);

            // Save the Biometric
            $biometrics->save();

            DB::commit();
            return $this->success(
                $id ? "Biometric updated"
                    : "Biometric created",
                $biometrics, $id ? 200 : 201);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteBiometric($id)
    {
        DB::beginTransaction();
        try {
            $biometrics = Biometric::find($id);

            // Check the Biometric
            if(!$biometrics) return $this->error("No Biometric with ID $id", 404);

            // Delete the Biometric
            $biometrics->delete();

            DB::commit();
            return $this->success("Biometric deleted", $biometrics);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}