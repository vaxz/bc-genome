<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b4da290ec902b73c208be1f7c122e4bec79d7776d0495d0541711fbc49816461 extends Twig_Template
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
        $__internal_94bd272f011ff88badbe65458b831001758284a9d270722ae7645a5635d03184 = $this->env->getExtension("native_profiler");
        $__internal_94bd272f011ff88badbe65458b831001758284a9d270722ae7645a5635d03184->enter($__internal_94bd272f011ff88badbe65458b831001758284a9d270722ae7645a5635d03184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94bd272f011ff88badbe65458b831001758284a9d270722ae7645a5635d03184->leave($__internal_94bd272f011ff88badbe65458b831001758284a9d270722ae7645a5635d03184_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c927498f52fbe0f4bdb2e343e96d100199f6870ae263840bfc0f005bcd938f3f = $this->env->getExtension("native_profiler");
        $__internal_c927498f52fbe0f4bdb2e343e96d100199f6870ae263840bfc0f005bcd938f3f->enter($__internal_c927498f52fbe0f4bdb2e343e96d100199f6870ae263840bfc0f005bcd938f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c927498f52fbe0f4bdb2e343e96d100199f6870ae263840bfc0f005bcd938f3f->leave($__internal_c927498f52fbe0f4bdb2e343e96d100199f6870ae263840bfc0f005bcd938f3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b024971a1c19d31fdd3238d6b0fffc6053c710423473c3053c8142c855514f86 = $this->env->getExtension("native_profiler");
        $__internal_b024971a1c19d31fdd3238d6b0fffc6053c710423473c3053c8142c855514f86->enter($__internal_b024971a1c19d31fdd3238d6b0fffc6053c710423473c3053c8142c855514f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b024971a1c19d31fdd3238d6b0fffc6053c710423473c3053c8142c855514f86->leave($__internal_b024971a1c19d31fdd3238d6b0fffc6053c710423473c3053c8142c855514f86_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a02ddc520eb22c84d601bf96f9ad6c0360ea4cb530165e940639a1d5f01477a5 = $this->env->getExtension("native_profiler");
        $__internal_a02ddc520eb22c84d601bf96f9ad6c0360ea4cb530165e940639a1d5f01477a5->enter($__internal_a02ddc520eb22c84d601bf96f9ad6c0360ea4cb530165e940639a1d5f01477a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a02ddc520eb22c84d601bf96f9ad6c0360ea4cb530165e940639a1d5f01477a5->leave($__internal_a02ddc520eb22c84d601bf96f9ad6c0360ea4cb530165e940639a1d5f01477a5_prof);

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
