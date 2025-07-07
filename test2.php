<?php 

$comments = [
    [
        'commentId' => 1,
        'commentContent' => 'Hai',
        'replies' => [
            [
                'commentId' => 11,
                'commentContent' => 'Hai juga',
                'replies' => [
                    [
                        'commentId' => 111,
                        'commentContent' => 'Haai juga hai jugaa',
                    ],
                    [
                        'commentId' => 111,
                        'commentContent' => 'Haai juga hai jugaa',
                    ]
                ]
            ],
            [
                'commentId' => 12,
                'commentContent' => 'Hai juga',
                'replies' => [
                    [
                        'commentId' => 121,
                        'commentContent' => 'Haai juga hai jugaa'
                    ]
                ]
            ]
        ]
    ],
    [
        'commentId' => 2,
        'commentContent' => 'Haloo',
    ]
];

function totalComments($comments){
    $total = 0;
    
    foreach ($comments as $comment){
        $total += 1;

        if (isset($comment['replies'])){
            $total += totalComments($comment['replies']);
        }
    }
    return $total;
}

$totalComments = totalComments($comments);
echo "Total Komentar: ";
echo $totalComments;