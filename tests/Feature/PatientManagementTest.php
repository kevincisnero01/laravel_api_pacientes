<?php

namespace Tests\Feature;

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_patient_can_be_retrieved()
    {
        $this->withoutExceptionHandling();

        factory(Patient::class,3)->create();

        $response = $this->get('api/pacientes');

        $response->assertOk();
    }

    /** @test */
    public function a_patient_can_be_created()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->post('api/pacientes', [
                'names' => 'Test Name',
                'last_names' => 'Last Name',
                'age' => '30',
                'gender' => 'Masculino',
                'cedula' => '20123456',
                'blood_type' => 'A+',
                'phone' => '4121234567',
                'email' => 'test@gmail.com',
                'address' => 'centro test'
        ]);

        $response->assertStatus(201);
        $this->assertCount(1,Patient::all());

        $patient = Patient::first();
        $this->assertEquals($patient->names, 'Test Name');
        $this->assertEquals($patient->last_names, 'Last Name');
        $this->assertEquals($patient->age, '30');
        $this->assertEquals($patient->gender, 'Masculino');
        $this->assertEquals($patient->cedula, '20123456');
        $this->assertEquals($patient->blood_type, 'A+');
        $this->assertEquals($patient->phone, '4121234567');
        $this->assertEquals($patient->email, 'test@gmail.com');
        $this->assertEquals($patient->address, 'centro test');
    }

}
