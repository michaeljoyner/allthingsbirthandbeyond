<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('front.services.index', ['services' => $this->services()]);
    }

    public function show($service)
    {
        if(!array_key_exists($service, $this->services())) {
            return abort(404);
        }

        $service = $this->services()[$service];

        return view("front.services.{$service['view']}", ['service' => $service]);
    }

    private function services()
    {
        return [
            'nurturing-mum' => [
                'name' => 'Nurturing Mum, Postnatal Pamper Package',
                'view' => 'nurturing-mum',
                'icon' => 'nurturing_mum.svg'
            ],
            'bespoke-new-parent-support' => [
                'name' => 'Bespoke New Parent Support',
                'view' => 'bespoke-new-parent-support',
                'icon' => 'bespoke_new_parent.svg'
            ],
            'holistic-sleep-coaching' => [
                'name' => 'Holistic Sleep Coaching',
                'view' => 'holistic-sleep-coaching',
                'icon' => 'holistic_sleep.svg'
            ],
            'new-parent-support' => [
                'name' => 'New Parent Support: Overnight',
                'view' => 'new-parent-support',
                'icon' => 'new_parent_support.svg'
            ],
            'postnatal-recovery-massage' => [
                'name' => 'Postnatal Recovery Massage',
                'view' => 'postnatal-recovery-massage',
                'icon' => 'post_natal_massage.svg'
            ],
            'parenting-mentor' => [
                'name' => 'Parenting Mentor',
                'view' => 'parenting-mentor',
                'icon' => 'parenting_mentor.svg'
            ],
            'infant-feeding-support' => [
                'name' => 'Infant Feeding Support: On-line',
                'view' => 'infant-feeding-support',
                'icon' => 'infant_feeding_support.svg'
            ],
            'birth-doula' => [
                'name' => 'Birth Doula',
                'view' => 'birth-doula',
                'icon' => 'birth_doula.svg'
            ],
            'postnatal-doula-service' => [
                'name' => 'Postnatal Doula Service',
                'view' => 'postnatal-doula-service',
                'icon' => 'post_natal_doula_service.svg'
            ],
        ];
    }
}
