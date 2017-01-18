@section('top_menu')
    <ul>
        <li><a href="<?= url('/') ?>" class="current"><span></span>News</a></li>
        <li><a href="<?= url('about') ?>"><span></span>About</a></li>
        <li><a href="<?= url('contacts') ?>"><span></span>Contacts</a></li>
    </ul>

    <div id="register_box">
        Already Registered? Click <a href="#" class="signup">Here</a> | <a href="#" class="new_reg">Register</a>
    </div>
@show
