<?php

/* default/index.html.twig */
class __TwigTemplate_83c0f560cb4fcdbd25b222ba0d5e6db224d6d8b23f217e9e13641584f6a2dd3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c3d1eaf23cab3b3ebb43ae8b514a7e38e05a5c15677c1c4a02452c2451482d1 = $this->env->getExtension("native_profiler");
        $__internal_9c3d1eaf23cab3b3ebb43ae8b514a7e38e05a5c15677c1c4a02452c2451482d1->enter($__internal_9c3d1eaf23cab3b3ebb43ae8b514a7e38e05a5c15677c1c4a02452c2451482d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3d1eaf23cab3b3ebb43ae8b514a7e38e05a5c15677c1c4a02452c2451482d1->leave($__internal_9c3d1eaf23cab3b3ebb43ae8b514a7e38e05a5c15677c1c4a02452c2451482d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49772bce402e4f053e865eb0b81ab07a811966ca5d46459eb026672b7bafa40a = $this->env->getExtension("native_profiler");
        $__internal_49772bce402e4f053e865eb0b81ab07a811966ca5d46459eb026672b7bafa40a->enter($__internal_49772bce402e4f053e865eb0b81ab07a811966ca5d46459eb026672b7bafa40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_49772bce402e4f053e865eb0b81ab07a811966ca5d46459eb026672b7bafa40a->leave($__internal_49772bce402e4f053e865eb0b81ab07a811966ca5d46459eb026672b7bafa40a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
