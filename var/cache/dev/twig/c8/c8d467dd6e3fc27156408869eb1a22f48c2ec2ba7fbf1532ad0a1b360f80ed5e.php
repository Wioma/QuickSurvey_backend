<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_646cb1b0cd19c86bafe270c3557c36616078d92355b46d211b92237664050367 extends Twig_Template
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
        $__internal_0b05da39827427cc2dc74910b153f3035b737516ff1577e514f2c0f30a58598f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b05da39827427cc2dc74910b153f3035b737516ff1577e514f2c0f30a58598f->enter($__internal_0b05da39827427cc2dc74910b153f3035b737516ff1577e514f2c0f30a58598f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_affb8ceed95c46d510b5d89ee73da4ca479ce5f2d35f4234ad780531164e8e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affb8ceed95c46d510b5d89ee73da4ca479ce5f2d35f4234ad780531164e8e20->enter($__internal_affb8ceed95c46d510b5d89ee73da4ca479ce5f2d35f4234ad780531164e8e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0b05da39827427cc2dc74910b153f3035b737516ff1577e514f2c0f30a58598f->leave($__internal_0b05da39827427cc2dc74910b153f3035b737516ff1577e514f2c0f30a58598f_prof);

        
        $__internal_affb8ceed95c46d510b5d89ee73da4ca479ce5f2d35f4234ad780531164e8e20->leave($__internal_affb8ceed95c46d510b5d89ee73da4ca479ce5f2d35f4234ad780531164e8e20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
