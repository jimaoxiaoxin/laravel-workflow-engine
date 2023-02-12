<?php

return [
    'general' => [
        'state_machines' => [
            [
                'name' => 'step_A', //filling
                'order' => 1,
                'type' => 'single',
                'init_status' => 'ready',
                'group_status_order' => [
                    'ready',
                    'done',
                ],
            ],
            [
                'name' => 'step_B', //submission
                'order' => 2,
                'type' => 'single',
                'init_status' => 'ready',
                'group_status_order' => [
                    'ready',
                    'done',
                ],
            ],
            [
                'name' => 'step_C', // application_support
                'order' => 3,
                'type' => 'single',
                'init_status' => 'n_a',
                'group_status_order' => [
                    'n_a',
                    'ready',
                    'done',
                ],
            ],
            [
                'name' => 'step_D', //appointment
                'order' => 4,
                'type' => 'multi',
                'init_status' => 'n_a',
                'reference_status_order' => [
                    'n_a',
                    'ready',
                    'half_done',
                    'done',
                ],
                'group_status_order' => [
                    'n_a',
                    'ready',
                    'half_done',
                    'done',
                ],
            ],
            [
                'name' => 'step_E', // documentation
                'order' => 5,
                'type' => 'single',
                'init_status' => 'n_a',
                'group_status_order' => [
                    'n_a',
                    'ready',
                    'done',
                ],
            ],
            [
                'name' => 'step_F', // service_fees
                'order' => 6,
                'type' => 'single',
                'init_status' => 'n_a',
                'group_status_order' => [
                    'n_a',
                    'ready',
                    'done',
                ],
            ],
            [
                'name' => 'step_G', // delivery
                'order' => 7,
                'type' => 'single',
                'init_status' => 'n_a',
                'group_status_order' => [
                    'n_a',
                    'ready',
                    'done',
                ],
            ],
        ],
        'transitions' => [
            'step_A' => [
                'action_A' => 'done',
            ],
            'step_B' => [
                'action_A' => 'done',
            ],
            'step_C' => [
                'action_A' => 'ready',
                'action_B' => 'half_done',
                'action_C' => 'done',
            ],
            'step_D' => [
                'action_A' => 'ready',
                'action_D' => 'half_done',
                'action_E' => 'done',
            ],
            'step_E' => [
                'action_E' => 'ready',
                'action_F' => 'half_done',
                'action_G' => '80_percent_done',
                'action_H' => 'done',
            ],
            'step_F' => [
                'action_H' => 'ready',
                'action_I' => 'done',
            ],
            'step_G' => [
                'action_I' => 'ready',
                'action_J' => 'done',
            ],
//            'action_A' => [ // submit
//            'action_B' => [ // application_support_requested
//            'action_C' => [ // application_support_paid
//            'action_D' => [ // take_appointment
//            'action_E' => [ // attend appointment
//            'action_F' => [ // document_expected
//            'action_G' => [ // document_expected_come
//            'action_H' => [ // document_done
//            'action_I' => [ // receive_service_fee
//            'action_J' => [ // delivery
        ],
    ],
];
