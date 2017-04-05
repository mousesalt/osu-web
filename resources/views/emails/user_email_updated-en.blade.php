{{--
    Copyright 2015-2017 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
Hi {{ $user->username }},

This is just a confirmation that your osu! email address has been changed to "{{ $user->user_email }}".
You should receive this message to both of your new and old email addresses.
Please make sure that you received this email at your new address otherwise you may get locked out of your account.

Please reply to this email IMMEDIATELY if you did not request this change.

@include('emails._signature')
