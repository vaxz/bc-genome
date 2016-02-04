<?php

/* bcGenMainBundle:Main:layout.html.twig */
class __TwigTemplate_d69211068ca86fb384d2461567ab40f74fdeef3439b93b5180f52a58b377441d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "bcGenMainBundle:Main:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bcGenBundleBody' => array($this, 'block_bcGenBundleBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_407deee7bfd792751741fb438b17b43ca5847bea535a858f442c5a62428766d4 = $this->env->getExtension("native_profiler");
        $__internal_407deee7bfd792751741fb438b17b43ca5847bea535a858f442c5a62428766d4->enter($__internal_407deee7bfd792751741fb438b17b43ca5847bea535a858f442c5a62428766d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_407deee7bfd792751741fb438b17b43ca5847bea535a858f442c5a62428766d4->leave($__internal_407deee7bfd792751741fb438b17b43ca5847bea535a858f442c5a62428766d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4cac2cc1c7f11a7c7ffbffcfd15e4931603cb3773b410b4aa56c5cde9e6b0c8 = $this->env->getExtension("native_profiler");
        $__internal_b4cac2cc1c7f11a7c7ffbffcfd15e4931603cb3773b410b4aa56c5cde9e6b0c8->enter($__internal_b4cac2cc1c7f11a7c7ffbffcfd15e4931603cb3773b410b4aa56c5cde9e6b0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    ";
        
        $__internal_b4cac2cc1c7f11a7c7ffbffcfd15e4931603cb3773b410b4aa56c5cde9e6b0c8->leave($__internal_b4cac2cc1c7f11a7c7ffbffcfd15e4931603cb3773b410b4aa56c5cde9e6b0c8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_49f763053e7870c61826a766a65f471307393b743922c3a7f805e937dff52a42 = $this->env->getExtension("native_profiler");
        $__internal_49f763053e7870c61826a766a65f471307393b743922c3a7f805e937dff52a42->enter($__internal_49f763053e7870c61826a766a65f471307393b743922c3a7f805e937dff52a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "     ";
        // line 10
        echo "     ";
        $this->displayBlock('bcGenBundleBody', $context, $blocks);
        
        $__internal_49f763053e7870c61826a766a65f471307393b743922c3a7f805e937dff52a42->leave($__internal_49f763053e7870c61826a766a65f471307393b743922c3a7f805e937dff52a42_prof);

    }

    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_2b22219e5dc66722822327265473f965894f2bce74137d0fe204f78f33d3b9cf = $this->env->getExtension("native_profiler");
        $__internal_2b22219e5dc66722822327265473f965894f2bce74137d0fe204f78f33d3b9cf->enter($__internal_2b22219e5dc66722822327265473f965894f2bce74137d0fe204f78f33d3b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        // line 11
        echo "     ";
        
        $__internal_2b22219e5dc66722822327265473f965894f2bce74137d0fe204f78f33d3b9cf->leave($__internal_2b22219e5dc66722822327265473f965894f2bce74137d0fe204f78f33d3b9cf_prof);

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
        return array (  73 => 11,  60 => 10,  58 => 9,  52 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
