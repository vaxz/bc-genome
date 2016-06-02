<?php

/* bcGenMainBundle:Main:layout.html.twig */
class __TwigTemplate_3e04ff11e233c156a639bea9830b4b0dc902d81997582153b47d69df5687620d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "bcGenMainBundle:Main:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'bcGenBundleHeader' => array($this, 'block_bcGenBundleHeader'),
            'body' => array($this, 'block_body'),
            'bcGenBundleBody' => array($this, 'block_bcGenBundleBody'),
            'leftside' => array($this, 'block_leftside'),
            'bcGenBundleLSide' => array($this, 'block_bcGenBundleLSide'),
            'rightside' => array($this, 'block_rightside'),
            'bcGenBundleRSide' => array($this, 'block_bcGenBundleRSide'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9883c036779084f9454efe67cbe8b1e02902f7feb10dd869cea3cc7120631670 = $this->env->getExtension("native_profiler");
        $__internal_9883c036779084f9454efe67cbe8b1e02902f7feb10dd869cea3cc7120631670->enter($__internal_9883c036779084f9454efe67cbe8b1e02902f7feb10dd869cea3cc7120631670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9883c036779084f9454efe67cbe8b1e02902f7feb10dd869cea3cc7120631670->leave($__internal_9883c036779084f9454efe67cbe8b1e02902f7feb10dd869cea3cc7120631670_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_e0ca8b7c88f17c184e545572c8286b5ba5a83ced34b4afa88dbc1e7de625a348 = $this->env->getExtension("native_profiler");
        $__internal_e0ca8b7c88f17c184e545572c8286b5ba5a83ced34b4afa88dbc1e7de625a348->enter($__internal_e0ca8b7c88f17c184e545572c8286b5ba5a83ced34b4afa88dbc1e7de625a348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        // line 2
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_e0ca8b7c88f17c184e545572c8286b5ba5a83ced34b4afa88dbc1e7de625a348->leave($__internal_e0ca8b7c88f17c184e545572c8286b5ba5a83ced34b4afa88dbc1e7de625a348_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_667547549f1a7b76f646eab64b095c4919575327c20c4ea0bd9e7b82862bc09a = $this->env->getExtension("native_profiler");
        $__internal_667547549f1a7b76f646eab64b095c4919575327c20c4ea0bd9e7b82862bc09a->enter($__internal_667547549f1a7b76f646eab64b095c4919575327c20c4ea0bd9e7b82862bc09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
        // line 4
        echo " ";
        $this->displayBlock('bcGenBundleHeader', $context, $blocks);
        // line 5
        echo "<nav id=\"menu\">
\t<a href=\"\">Connexion</a> <a href=\"\">Accueil</a> <a href=\"\">Fichier CSV</a>
\t<a href=\"\">Upstream</a>
</nav>
";
        
        $__internal_667547549f1a7b76f646eab64b095c4919575327c20c4ea0bd9e7b82862bc09a->leave($__internal_667547549f1a7b76f646eab64b095c4919575327c20c4ea0bd9e7b82862bc09a_prof);

    }

    // line 4
    public function block_bcGenBundleHeader($context, array $blocks = array())
    {
        $__internal_4cbca1163b776a3101b8869661c847f51c12af84a12c5ddacda7daa893b41535 = $this->env->getExtension("native_profiler");
        $__internal_4cbca1163b776a3101b8869661c847f51c12af84a12c5ddacda7daa893b41535->enter($__internal_4cbca1163b776a3101b8869661c847f51c12af84a12c5ddacda7daa893b41535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleHeader"));

        echo " ";
        
        $__internal_4cbca1163b776a3101b8869661c847f51c12af84a12c5ddacda7daa893b41535->leave($__internal_4cbca1163b776a3101b8869661c847f51c12af84a12c5ddacda7daa893b41535_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_47594827078124b9ff074f45a8406beddfb06d91530d4fc24c8e6a33b9bc7270 = $this->env->getExtension("native_profiler");
        $__internal_47594827078124b9ff074f45a8406beddfb06d91530d4fc24c8e6a33b9bc7270->enter($__internal_47594827078124b9ff074f45a8406beddfb06d91530d4fc24c8e6a33b9bc7270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->displayBlock('bcGenBundleBody', $context, $blocks);
        // line 10
        echo " ";
        
        $__internal_47594827078124b9ff074f45a8406beddfb06d91530d4fc24c8e6a33b9bc7270->leave($__internal_47594827078124b9ff074f45a8406beddfb06d91530d4fc24c8e6a33b9bc7270_prof);

    }

    // line 9
    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_8a127c25c4a90a39c454930978285c66926322d44119b21a1d3ee7cfca76b209 = $this->env->getExtension("native_profiler");
        $__internal_8a127c25c4a90a39c454930978285c66926322d44119b21a1d3ee7cfca76b209->enter($__internal_8a127c25c4a90a39c454930978285c66926322d44119b21a1d3ee7cfca76b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        echo " ";
        
        $__internal_8a127c25c4a90a39c454930978285c66926322d44119b21a1d3ee7cfca76b209->leave($__internal_8a127c25c4a90a39c454930978285c66926322d44119b21a1d3ee7cfca76b209_prof);

    }

    // line 10
    public function block_leftside($context, array $blocks = array())
    {
        $__internal_a4360332e6a88b743f43f90153813b0eef1fd1a4484b04b4fa6e0f269fdf421e = $this->env->getExtension("native_profiler");
        $__internal_a4360332e6a88b743f43f90153813b0eef1fd1a4484b04b4fa6e0f269fdf421e->enter($__internal_a4360332e6a88b743f43f90153813b0eef1fd1a4484b04b4fa6e0f269fdf421e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftside"));

        echo " ";
        $this->displayBlock('bcGenBundleLSide', $context, $blocks);
        // line 11
        echo " ";
        
        $__internal_a4360332e6a88b743f43f90153813b0eef1fd1a4484b04b4fa6e0f269fdf421e->leave($__internal_a4360332e6a88b743f43f90153813b0eef1fd1a4484b04b4fa6e0f269fdf421e_prof);

    }

    // line 10
    public function block_bcGenBundleLSide($context, array $blocks = array())
    {
        $__internal_80d30b858b1c6f4bc3e592b8bc1b08b76e007eac135d75c13af42fef936e16bb = $this->env->getExtension("native_profiler");
        $__internal_80d30b858b1c6f4bc3e592b8bc1b08b76e007eac135d75c13af42fef936e16bb->enter($__internal_80d30b858b1c6f4bc3e592b8bc1b08b76e007eac135d75c13af42fef936e16bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleLSide"));

        echo " ";
        
        $__internal_80d30b858b1c6f4bc3e592b8bc1b08b76e007eac135d75c13af42fef936e16bb->leave($__internal_80d30b858b1c6f4bc3e592b8bc1b08b76e007eac135d75c13af42fef936e16bb_prof);

    }

    // line 11
    public function block_rightside($context, array $blocks = array())
    {
        $__internal_7157d64ec17d97b3a0b9bf06fb64a49d4c49e82a9cdd48a9f0cc9171a02ddfd8 = $this->env->getExtension("native_profiler");
        $__internal_7157d64ec17d97b3a0b9bf06fb64a49d4c49e82a9cdd48a9f0cc9171a02ddfd8->enter($__internal_7157d64ec17d97b3a0b9bf06fb64a49d4c49e82a9cdd48a9f0cc9171a02ddfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightside"));

        echo " ";
        $this->displayBlock('bcGenBundleRSide', $context, $blocks);
        // line 12
        echo " ";
        
        $__internal_7157d64ec17d97b3a0b9bf06fb64a49d4c49e82a9cdd48a9f0cc9171a02ddfd8->leave($__internal_7157d64ec17d97b3a0b9bf06fb64a49d4c49e82a9cdd48a9f0cc9171a02ddfd8_prof);

    }

    // line 11
    public function block_bcGenBundleRSide($context, array $blocks = array())
    {
        $__internal_e013ba68842eb414ecb61877f2bd953479df55524c09ee20b52719a6719b0626 = $this->env->getExtension("native_profiler");
        $__internal_e013ba68842eb414ecb61877f2bd953479df55524c09ee20b52719a6719b0626->enter($__internal_e013ba68842eb414ecb61877f2bd953479df55524c09ee20b52719a6719b0626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleRSide"));

        // line 12
        echo " ";
        
        $__internal_e013ba68842eb414ecb61877f2bd953479df55524c09ee20b52719a6719b0626->leave($__internal_e013ba68842eb414ecb61877f2bd953479df55524c09ee20b52719a6719b0626_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 12,  161 => 11,  154 => 12,  146 => 11,  134 => 10,  127 => 11,  119 => 10,  107 => 9,  100 => 10,  92 => 9,  80 => 4,  69 => 5,  66 => 4,  57 => 3,  48 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %} {% block title %} {# parent() gets*/
/* the content from the parent layout block #} {{ parent() }} {% endblock*/
/* %} {% block header %} {{ parent() }} {# A new block is defined in order*/
/* to fill it in #} {% block bcGenBundleHeader %} {% endblock %}*/
/* <nav id="menu">*/
/* 	<a href="">Connexion</a> <a href="">Accueil</a> <a href="">Fichier CSV</a>*/
/* 	<a href="">Upstream</a>*/
/* </nav>*/
/* {% endblock %} {% block body %} {% block bcGenBundleBody %} {% endblock*/
/* %} {% endblock %} {% block leftside %} {% block bcGenBundleLSide %} {%*/
/* endblock %} {% endblock %} {% block rightside %} {% block*/
/* bcGenBundleRSide %} {% endblock %} {% endblock %}*/
/* */
