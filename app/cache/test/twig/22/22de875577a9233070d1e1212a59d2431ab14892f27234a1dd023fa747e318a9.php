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
        $__internal_41bc0630c2f175e486b6eebebdabf4abfceb18d27b590a947e7401c9e73562eb = $this->env->getExtension("native_profiler");
        $__internal_41bc0630c2f175e486b6eebebdabf4abfceb18d27b590a947e7401c9e73562eb->enter($__internal_41bc0630c2f175e486b6eebebdabf4abfceb18d27b590a947e7401c9e73562eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41bc0630c2f175e486b6eebebdabf4abfceb18d27b590a947e7401c9e73562eb->leave($__internal_41bc0630c2f175e486b6eebebdabf4abfceb18d27b590a947e7401c9e73562eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_400b9828a1932508a68b392f2e681c375e200300db39cca7ddcd7cc8a44070a5 = $this->env->getExtension("native_profiler");
        $__internal_400b9828a1932508a68b392f2e681c375e200300db39cca7ddcd7cc8a44070a5->enter($__internal_400b9828a1932508a68b392f2e681c375e200300db39cca7ddcd7cc8a44070a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_400b9828a1932508a68b392f2e681c375e200300db39cca7ddcd7cc8a44070a5->leave($__internal_400b9828a1932508a68b392f2e681c375e200300db39cca7ddcd7cc8a44070a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ac715df05449107c127694456bea4bacb7227946dc5e410cd3259102ddf8e98 = $this->env->getExtension("native_profiler");
        $__internal_6ac715df05449107c127694456bea4bacb7227946dc5e410cd3259102ddf8e98->enter($__internal_6ac715df05449107c127694456bea4bacb7227946dc5e410cd3259102ddf8e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ac715df05449107c127694456bea4bacb7227946dc5e410cd3259102ddf8e98->leave($__internal_6ac715df05449107c127694456bea4bacb7227946dc5e410cd3259102ddf8e98_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c15cad081eb847febd55f76c7487775c5e5f5f0adbd51d30159c2869e0df333 = $this->env->getExtension("native_profiler");
        $__internal_9c15cad081eb847febd55f76c7487775c5e5f5f0adbd51d30159c2869e0df333->enter($__internal_9c15cad081eb847febd55f76c7487775c5e5f5f0adbd51d30159c2869e0df333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9c15cad081eb847febd55f76c7487775c5e5f5f0adbd51d30159c2869e0df333->leave($__internal_9c15cad081eb847febd55f76c7487775c5e5f5f0adbd51d30159c2869e0df333_prof);

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
