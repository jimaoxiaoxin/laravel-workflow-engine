<?php

return [
    'general' => [
        'steps' => [
            [
                'name' => 'step_A',
                'order' => 1,
                'type' => 'single',
                'init_status' => 'ready',
                'group_status_order' => [
                    'ready',
                    'done',
                ],
            ],
            [
                'name' => 'step_B',
                'order' => 2,
                'type' => 'single',
                'init_status' => 'ready',
                'group_status_order' => [
                    'ready',
                    'done',
                ],
            ],
            [
                'name' => 'step_C',
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
                'name' => 'step_D',
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
                'name' => 'step_E',
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
                'name' => 'step_F',
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
                'name' => 'step_G',
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
        'triggers' => [
            'action_A' => [
                'step_A' => 'done',
                'step_B' => 'done',
                'step_C' => 'ready',
                'step_D' => 'ready',
            ],
            'action_B' => [

            ],
            'stepC' => [
            ],
        ],
    ],
];
