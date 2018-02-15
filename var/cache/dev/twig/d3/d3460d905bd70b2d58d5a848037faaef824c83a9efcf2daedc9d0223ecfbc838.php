<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ae371fb2734b5e35e71d243827059fbd00ce9d9ca4c6e4823941d7aa9be8737e extends Twig_Template
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
        $__internal_db4ca9b805faddb98d37a0ff01f7991158825792a285c789c7afc6fe9744ffcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4ca9b805faddb98d37a0ff01f7991158825792a285c789c7afc6fe9744ffcd->enter($__internal_db4ca9b805faddb98d37a0ff01f7991158825792a285c789c7afc6fe9744ffcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4b334e94ac31aba6adf1ea71445a41ab32fa36764b1802b074a6013cfa25914c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b334e94ac31aba6adf1ea71445a41ab32fa36764b1802b074a6013cfa25914c->enter($__internal_4b334e94ac31aba6adf1ea71445a41ab32fa36764b1802b074a6013cfa25914c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_db4ca9b805faddb98d37a0ff01f7991158825792a285c789c7afc6fe9744ffcd->leave($__internal_db4ca9b805faddb98d37a0ff01f7991158825792a285c789c7afc6fe9744ffcd_prof);

        
        $__internal_4b334e94ac31aba6adf1ea71445a41ab32fa36764b1802b074a6013cfa25914c->leave($__internal_4b334e94ac31aba6adf1ea71445a41ab32fa36764b1802b074a6013cfa25914c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
