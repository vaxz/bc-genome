<?php

/* bcGenMainBundle:Main:searchGeneForm.html.twig */
class __TwigTemplate_6196d260abe5caa4872906d5a63f4c07aafcbf20bff47cac1afe62dc65331571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_830bf0b03220e726d069bcd06fcda00d408bdd5c5e02aa82771f064e1b585afc = $this->env->getExtension("native_profiler");
        $__internal_830bf0b03220e726d069bcd06fcda00d408bdd5c5e02aa82771f064e1b585afc->enter($__internal_830bf0b03220e726d069bcd06fcda00d408bdd5c5e02aa82771f064e1b585afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:searchGeneForm.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("bc_gen_main_detailed_display");
        echo "\" method=\"POST\" >
  <p>Research of one gene</p>
  ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget');
        echo "
  <button type=\"Submit\">Search</button>
  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
        
        $__internal_830bf0b03220e726d069bcd06fcda00d408bdd5c5e02aa82771f064e1b585afc->leave($__internal_830bf0b03220e726d069bcd06fcda00d408bdd5c5e02aa82771f064e1b585afc_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:searchGeneForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  28 => 3,  22 => 1,);
    }
}
