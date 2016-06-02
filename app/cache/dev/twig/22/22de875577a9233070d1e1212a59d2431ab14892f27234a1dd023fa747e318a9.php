<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9a0db66044fa4b5f6a498a5dd6de065dd33775d51f04841e755075e67ccd3d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22f6edb532520f79c17a01294bdd46d7251c164a3777676f14e746e52c8bd477 = $this->env->getExtension("native_profiler");
        $__internal_22f6edb532520f79c17a01294bdd46d7251c164a3777676f14e746e52c8bd477->enter($__internal_22f6edb532520f79c17a01294bdd46d7251c164a3777676f14e746e52c8bd477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f6edb532520f79c17a01294bdd46d7251c164a3777676f14e746e52c8bd477->leave($__internal_22f6edb532520f79c17a01294bdd46d7251c164a3777676f14e746e52c8bd477_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56ee7b4810785073c3c6f075f14e6b14e81addd5930dfd7ae0d79d2c4f28c556 = $this->env->getExtension("native_profiler");
        $__internal_56ee7b4810785073c3c6f075f14e6b14e81addd5930dfd7ae0d79d2c4f28c556->enter($__internal_56ee7b4810785073c3c6f075f14e6b14e81addd5930dfd7ae0d79d2c4f28c556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_56ee7b4810785073c3c6f075f14e6b14e81addd5930dfd7ae0d79d2c4f28c556->leave($__internal_56ee7b4810785073c3c6f075f14e6b14e81addd5930dfd7ae0d79d2c4f28c556_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f6d1b00dda24c3139c1c30fc24a845e9f3cb162ae34350fd42fd45d63443900 = $this->env->getExtension("native_profiler");
        $__internal_1f6d1b00dda24c3139c1c30fc24a845e9f3cb162ae34350fd42fd45d63443900->enter($__internal_1f6d1b00dda24c3139c1c30fc24a845e9f3cb162ae34350fd42fd45d63443900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f6d1b00dda24c3139c1c30fc24a845e9f3cb162ae34350fd42fd45d63443900->leave($__internal_1f6d1b00dda24c3139c1c30fc24a845e9f3cb162ae34350fd42fd45d63443900_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bfa3422d17572b4965dc3869316e3e592b961d8c1125b7a45adbd2354d0ea81 = $this->env->getExtension("native_profiler");
        $__internal_7bfa3422d17572b4965dc3869316e3e592b961d8c1125b7a45adbd2354d0ea81->enter($__internal_7bfa3422d17572b4965dc3869316e3e592b961d8c1125b7a45adbd2354d0ea81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7bfa3422d17572b4965dc3869316e3e592b961d8c1125b7a45adbd2354d0ea81->leave($__internal_7bfa3422d17572b4965dc3869316e3e592b961d8c1125b7a45adbd2354d0ea81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
