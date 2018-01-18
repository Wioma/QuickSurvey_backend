<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_08697a16743e5805a070ee53c80713cdcd97d2a7260d4a2587720e909ba13f57 extends Twig_Template
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
        $__internal_891827fe5ada33d4c084c6da25acc2feeae379096ce407b80b2eab0092ad9467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891827fe5ada33d4c084c6da25acc2feeae379096ce407b80b2eab0092ad9467->enter($__internal_891827fe5ada33d4c084c6da25acc2feeae379096ce407b80b2eab0092ad9467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9bd87ca8906e4cd87e9817ac9b45be62d775055e14da02bd445e4ced587f68d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd87ca8906e4cd87e9817ac9b45be62d775055e14da02bd445e4ced587f68d8->enter($__internal_9bd87ca8906e4cd87e9817ac9b45be62d775055e14da02bd445e4ced587f68d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_891827fe5ada33d4c084c6da25acc2feeae379096ce407b80b2eab0092ad9467->leave($__internal_891827fe5ada33d4c084c6da25acc2feeae379096ce407b80b2eab0092ad9467_prof);

        
        $__internal_9bd87ca8906e4cd87e9817ac9b45be62d775055e14da02bd445e4ced587f68d8->leave($__internal_9bd87ca8906e4cd87e9817ac9b45be62d775055e14da02bd445e4ced587f68d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
