<?php

return [
    'general' => [
        'steps' => [
            [
                'name' => 'step_A', //filling
                'order' => 1,
                'type' => 'single',
                'init_status' => 'ready',
                'transitions' => [
                    'action_A' => [
                        'ready' => 'done',
                    ]
                ],
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
                'transitions' => [
                    'action_A' => [
                        'ready' => 'done',
                    ]
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
                'transitions' => [
                    'action_A' => [
                        'n_a' => 'ready',
                    ],
                    'action_B' => [
                        'ready' => 'half_done',
                    ],
                    'action_C' => [
                        'half_done' => 'done',
                    ]
                ]
            ],
            [
                'name' => 'step_D', //appointment
                'order' => 4,
                'type' => 'multi',
                'init_status' => 'n_a',
                'transitions' => [
                    'action_A' => [
                        'n_a' => 'ready',
                    ],
                    'action_D' => [
                        'ready' => 'half_done',
                    ],
                    'action_E' => [
                        'half_done' => 'done',
                    ],
                ],
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
                'transitions' => [
                    'action_E' => [
                        'n_a' => 'ready',
                    ],
                    'action_F' => [
                        'ready' => 'half_done',
                    ],
                    'action_G' => [
                        'half_done' => '80_percent_done',
                    ],
                    'action_H' => [
                        '80_percent_done' => 'done',
                    ],
                ],
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
                'transitions' => [
                    'action_H' => [
                        'n_a' => 'ready',
                    ],
                    'action_I' => [
                        'ready' => 'done',
                    ],
                ],
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
                'transitions' => [
                    'action_I' => [
                        'n_a' => 'ready',
                    ],
                    'action_J' => [
                        'ready' => 'done',
                    ],
                ],
                'group_status_order' => [
                    'n_a',
                    'ready',
                    'done',
                ],
            ],
        ],
    ],
];
