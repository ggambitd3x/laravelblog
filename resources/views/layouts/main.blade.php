<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>design blog - free css template</title>
    <meta name="keywords" content="free css templates, blog design, 2-column, web design, CSS, HTML" />
    <meta name="description" content="Design Blog - free css template, 2-column blog layout" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript">
        function clearText(field)
        {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
</head>
<body>

<div id="templatemo_body_wrapper">
    <div id="templatemo_wrapper">

        <div id="templatemo_header">

            @include('fragments.header')

            <div class="cleaner"></div>
        </div> <!-- end of header -->

        <div id="templatemo_menu">

            @include('fragments.top_menu')

        </div> <!-- end of templatemo_menu -->

        <div id="templatemo_main">

            <div id="templatemo_content">
                @yield('content')
            </div>

            @include('fragments.sidebar')

            <div class="cleaner"></div>
        </div>

    </div>
    <div class="cleaner"></div>
</div>


@include('fragments.footer')

</body>
</html>