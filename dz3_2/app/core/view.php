<?php

class View {

    function generate($content_view, $template_view,$data=null){
        include "./app/views/".$template_view;

    }

    function generate_dz3($content_view, $template_view,$data=null,$message=null){
        include "./app/views/".$template_view;

    }

}