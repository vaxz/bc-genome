<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_40bb6141d62232e90b69ec054e10bc2fef3b17ba768b26c0de4b95c9efab9bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_461f9f9b11140e9eca39f55a3badb2db52dbefdaf82dcaa9e2aa917d2382a9fa = $this->env->getExtension("native_profiler");
        $__internal_461f9f9b11140e9eca39f55a3badb2db52dbefdaf82dcaa9e2aa917d2382a9fa->enter($__internal_461f9f9b11140e9eca39f55a3badb2db52dbefdaf82dcaa9e2aa917d2382a9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461f9f9b11140e9eca39f55a3badb2db52dbefdaf82dcaa9e2aa917d2382a9fa->leave($__internal_461f9f9b11140e9eca39f55a3badb2db52dbefdaf82dcaa9e2aa917d2382a9fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cba70fc98af4536c40465724f1e49ca21e7872b68071faa30766a63ffcd9730f = $this->env->getExtension("native_profiler");
        $__internal_cba70fc98af4536c40465724f1e49ca21e7872b68071faa30766a63ffcd9730f->enter($__internal_cba70fc98af4536c40465724f1e49ca21e7872b68071faa30766a63ffcd9730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cba70fc98af4536c40465724f1e49ca21e7872b68071faa30766a63ffcd9730f->leave($__internal_cba70fc98af4536c40465724f1e49ca21e7872b68071faa30766a63ffcd9730f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ed875f10142d20f35329717e3132dc33f65d5554d9fd8f7da8a14e94955a9d0 = $this->env->getExtension("native_profiler");
        $__internal_0ed875f10142d20f35329717e3132dc33f65d5554d9fd8f7da8a14e94955a9d0->enter($__internal_0ed875f10142d20f35329717e3132dc33f65d5554d9fd8f7da8a14e94955a9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0ed875f10142d20f35329717e3132dc33f65d5554d9fd8f7da8a14e94955a9d0->leave($__internal_0ed875f10142d20f35329717e3132dc33f65d5554d9fd8f7da8a14e94955a9d0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e1ffa48ffc40d8120a036b992bdd6cf800c4d7f183dd62031eb4c5dcdfd7bf1 = $this->env->getExtension("native_profiler");
        $__internal_9e1ffa48ffc40d8120a036b992bdd6cf800c4d7f183dd62031eb4c5dcdfd7bf1->enter($__internal_9e1ffa48ffc40d8120a036b992bdd6cf800c4d7f183dd62031eb4c5dcdfd7bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_9e1ffa48ffc40d8120a036b992bdd6cf800c4d7f183dd62031eb4c5dcdfd7bf1->leave($__internal_9e1ffa48ffc40d8120a036b992bdd6cf800c4d7f183dd62031eb4c5dcdfd7bf1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e07e05b42a1377eb67bc169678306bcb0ddab420ea3217bdf246126d281c1ad = $this->env->getExtension("native_profiler");
        $__internal_0e07e05b42a1377eb67bc169678306bcb0ddab420ea3217bdf246126d281c1ad->enter($__internal_0e07e05b42a1377eb67bc169678306bcb0ddab420ea3217bdf246126d281c1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0e07e05b42a1377eb67bc169678306bcb0ddab420ea3217bdf246126d281c1ad->leave($__internal_0e07e05b42a1377eb67bc169678306bcb0ddab420ea3217bdf246126d281c1ad_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
