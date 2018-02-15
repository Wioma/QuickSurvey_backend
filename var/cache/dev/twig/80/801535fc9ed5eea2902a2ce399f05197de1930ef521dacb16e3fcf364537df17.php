<?php

/* @Tplm/Default/index.html.twig */
class __TwigTemplate_f40e4f82490d03e15fc6e1bd41bd7b3d760b9cfef0c2fa757f80f24d8af11744 extends Twig_Template
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
        $__internal_5b6b99660ddccbdbd2032009df881d38e0638f8a73364c90dfa47a3600153e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6b99660ddccbdbd2032009df881d38e0638f8a73364c90dfa47a3600153e41->enter($__internal_5b6b99660ddccbdbd2032009df881d38e0638f8a73364c90dfa47a3600153e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Tplm/Default/index.html.twig"));

        $__internal_03792594c25c81db0bbc33868d8ae4523378935f728ec80ae84a9c386ac86290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03792594c25c81db0bbc33868d8ae4523378935f728ec80ae84a9c386ac86290->enter($__internal_03792594c25c81db0bbc33868d8ae4523378935f728ec80ae84a9c386ac86290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Tplm/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_5b6b99660ddccbdbd2032009df881d38e0638f8a73364c90dfa47a3600153e41->leave($__internal_5b6b99660ddccbdbd2032009df881d38e0638f8a73364c90dfa47a3600153e41_prof);

        
        $__internal_03792594c25c81db0bbc33868d8ae4523378935f728ec80ae84a9c386ac86290->leave($__internal_03792594c25c81db0bbc33868d8ae4523378935f728ec80ae84a9c386ac86290_prof);

    }

    public function getTemplateName()
    {
        return "@Tplm/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "@Tplm/Default/index.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\src\\TplmBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
