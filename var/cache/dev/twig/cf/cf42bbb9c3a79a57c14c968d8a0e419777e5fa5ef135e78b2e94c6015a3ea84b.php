<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4b2bffbc44274e85ca0f6aeaa03014f32670ac2e5f0594e06647eeb1fd66eed8 extends Twig_Template
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
        $__internal_aeeb52f57bb47a603f09a0fb9791a2b75438ed2bdd187a92d096e17769736c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeeb52f57bb47a603f09a0fb9791a2b75438ed2bdd187a92d096e17769736c48->enter($__internal_aeeb52f57bb47a603f09a0fb9791a2b75438ed2bdd187a92d096e17769736c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_2ce9189389b8bc3f0da121991cdadbed7bb7999494dd050c1c8d167506bb080f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce9189389b8bc3f0da121991cdadbed7bb7999494dd050c1c8d167506bb080f->enter($__internal_2ce9189389b8bc3f0da121991cdadbed7bb7999494dd050c1c8d167506bb080f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_aeeb52f57bb47a603f09a0fb9791a2b75438ed2bdd187a92d096e17769736c48->leave($__internal_aeeb52f57bb47a603f09a0fb9791a2b75438ed2bdd187a92d096e17769736c48_prof);

        
        $__internal_2ce9189389b8bc3f0da121991cdadbed7bb7999494dd050c1c8d167506bb080f->leave($__internal_2ce9189389b8bc3f0da121991cdadbed7bb7999494dd050c1c8d167506bb080f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
