<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'require_login' => 'الرجاء تسجيل الدخول للمضي قدما.',
    'require_verification' => 'الرجاء التحقق للمضي قدما.',
    'restricted' => "لا يمكنك فعل ذلك بينما تكون مقيدًا.",
    'silenced' => "لا يمكنك فعل ذلك بينما تكون صامتًا.",
    'unauthorized' => 'الوصول مرفوض.',

    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'لا يمكن التراجع عن التصعيد.',
            'has_reply' => 'لا يمكن حذف النقاش مع الردود',
        ],
        'nominate' => [
            'exhausted' => 'لقد وصلت إلى حد الترشيح الخاص بك لهذا اليوم، يرجى المحاولة مرة أخرى غدا.',
            'full_bn_required' => 'يجب أن تكون مرشِحًا كاملاً لأداء هذا الترشيح المؤهل.',
            'full_bn_required_hybrid' => 'يجب أن تكون مرشحًا كاملاً لترشيح حزمة مراحل مع أكثر من وضع لعب.',
            'incorrect_state' => 'حدث خطأ حول تنفيذ هذا الإجراء، حاول تحديث الصفحة.',
            'owner' => "لا يمكن ترشيح خرائط الموسيقى الخاصة بك.",
        ],
        'resolve' => [
            'not_owner' => 'يمكن لمالك خريطة موسيقية وبادء النقاش ان ينهيه فقط.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'فقط مالك الخريطة الموسيقية او المرشِح/عضو فريق التأكد من الجودة يمكنه نشر ملاحظات الخريطة.',
        ],

        'vote' => [
            'limit_exceeded' => 'الرجاء الانتظار لفترة قبل الإدلاء بأصوات أكثر',
            'owner' => "لا يمكنك التصويت في المناقشة الخاصة بك.",
            'wrong_beatmapset_state' => 'يمكن فقط التصويت على المناقشات للخرائط في حالة الانتظار.',
        ],
    ],

    'beatmap_discussion_post' => [
        'destroy' => [
            'not_owner' => 'يمكنك حذف منشوراتك فقط.',
            'resolved' => 'لا يمكنك حذف منشور مناقشة مغلقة.',
            'system_generated' => 'المنشورات المتكونة تلقائيا لا يمكن حذفها.',
        ],

        'edit' => [
            'not_owner' => 'فقط الناشر يمكن ان يعدل المنشور.',
            'resolved' => 'لا يمكنك تعديل منشور مناقشة مغلقة.',
            'system_generated' => 'المنشورات المتكونة تلقائيا لا يمكن تعديلها.',
        ],

        'store' => [
            'beatmapset_locked' => 'هذه الخريطة مقفلة للمناقشة.',
        ],
    ],

    'chat' => [
        'blocked' => 'لا يمكن مراسلة شخص قام بحظرك او قمت بحظره.',
        'friends_only' => 'المستخدم يحظر الرسائل من الاشخاص الذين ليسو على قائمة اصدقاءه.',
        'moderated' => 'هذه القناة خاضعة للإشراف حاليا.',
        'no_access' => 'غير مسموح لك الوصول الى هذه القناة.',
        'restricted' => 'لا يمكنك إرسال رسائل حينما تكون صامتا، مقيد أو محظور.',
    ],

    'comment' => [
        'update' => [
            'deleted' => "لا يمكن تعديل منشور محذوف.",
        ],
    ],

    'contest' => [
        'voting_over' => 'لا يمكنك تغيير التصويت الخاص بك بعد انتهاء فترة التصويت لهذه المسابقة.',
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'لا يوجد إذن للاشراف في هذا المنتدى.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'يمكن حذف آخر منشور فقط.',
                'locked' => 'لا يمكن حذف منشور من موضوع مغلق.',
                'no_forum_access' => 'مطلوب الوصول إلى المنتدى المطلوب.',
                'not_owner' => 'يمكن للناشر فقط حذف هذا المنشور.',
            ],

            'edit' => [
                'deleted' => 'لا يمكن تعديل منشور محذوف.',
                'locked' => 'المنشور مقفل من التعديل.',
                'no_forum_access' => 'مطلوب الوصول إلى المنتدى المطلوب.',
                'not_owner' => 'يمكن للناشر فقط تعديل هذا المنشور.',
                'topic_locked' => 'لا يمكن تعديل منشور من موضوع مغلق.',
            ],

            'store' => [
                'play_more' => 'حاول اللعب قبل النشر على المنتديات، رجاءًا! إذا كان لديك مشكلة مع اللعب، فقم بالنشر في منتدى التعليمات والدعم.',
                'too_many_help_posts' => "تحتاج إلى لعب اللعبة بكثرة قبل أن تقوم بنشر أي منشورات أخرى. إذا لأزلت تواجه مشاكل في اللعب, قم بمراسلة support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'الرجاء قم بتعديل رسالتك الأخيرة بدلاً من النشر مرة أخرى.',
                'locked' => 'لا يمكن الرد على موضوع مغلق.',
                'no_forum_access' => 'مطلوب الوصول إلى المنتدى المطلوب.',
                'no_permission' => 'لا يوجد إذن للرد.',

                'user' => [
                    'require_login' => 'يرجى تسجيل الدخول للرد.',
                    'restricted' => "يتعذر الرد بينما تكون مقيداََ.",
                    'silenced' => "يتعذر الرد بينما تكون صامتاََ.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'مطلوب الوصول إلى المنتدى المطلوب.',
                'no_permission' => 'لا يوجد إذن لإنشاء موضوع جديد.',
                'forum_closed' => 'المنتدى مغلق ولا يمكن النشر فيه.',
            ],

            'vote' => [
                'no_forum_access' => 'مطلوب الوصول إلى المنتدى المطلوب.',
                'over' => 'الاقتراع انتهى ولا يمكن أن يتم التصويت عليه بعد الآن.',
                'play_more' => 'تحتاج الى اللعب اكثر قبل التصويت على المنتدى.',
                'voted' => 'غير مسموح بتغيير التصويت.',

                'user' => [
                    'require_login' => 'يرجى تسجيل الدخول للتصويت.',
                    'restricted' => "يتعذر التصويت بينما تكون مقيداََ.",
                    'silenced' => "يتعذر التصويت بينما تكون صامتاََ.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'مطلوب الوصول إلى المنتدى المطلوب.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'معطى خاطئ.',
                'not_owner' => 'يمكن فقط لـ المالك تعديل الغطاء.',
            ],
            'store' => [
                'forum_not_allowed' => 'هذا المنتدى لا يسمح بأغطية المواضيع.',
            ],
        ],

        'view' => [
            'admin_only' => 'يمكن للمسؤول فقط عرض هذا المنتدى.',
        ],
    ],

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'صفحة المستخدم مقفلة.',
                'not_owner' => 'يمكن فقط تعديل الصفحة الخاصة بك.',
                'require_supporter_tag' => 'تحتاج الى رابطة مؤيد!osu.',
            ],
        ],
    ],
];