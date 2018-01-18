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
        $__internal_ebf3b6346ff6b32eaeb84d2f77be88dd9f69077f70a23a72709657707e454bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf3b6346ff6b32eaeb84d2f77be88dd9f69077f70a23a72709657707e454bf1->enter($__internal_ebf3b6346ff6b32eaeb84d2f77be88dd9f69077f70a23a72709657707e454bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Tplm/Default/index.html.twig"));

        $__internal_b89b5c51dca60595fa2405f233d96c84f416f2a54279f3438f4d7e9cae29dc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89b5c51dca60595fa2405f233d96c84f416f2a54279f3438f4d7e9cae29dc77->enter($__internal_b89b5c51dca60595fa2405f233d96c84f416f2a54279f3438f4d7e9cae29dc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Tplm/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ebf3b6346ff6b32eaeb84d2f77be88dd9f69077f70a23a72709657707e454bf1->leave($__internal_ebf3b6346ff6b32eaeb84d2f77be88dd9f69077f70a23a72709657707e454bf1_prof);

        
        $__internal_b89b5c51dca60595fa2405f233d96c84f416f2a54279f3438f4d7e9cae29dc77->leave($__internal_b89b5c51dca60595fa2405f233d96c84f416f2a54279f3438f4d7e9cae29dc77_prof);

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
