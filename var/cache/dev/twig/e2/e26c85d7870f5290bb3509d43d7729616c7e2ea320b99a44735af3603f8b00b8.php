<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f25a7ac1e0668f0390da2afc6baadde712745547e31ac2c33913d6139bfe733a extends Twig_Template
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
        $__internal_425320b8f736a3633ce35a266352b069c3e0b9208ca46c849884719b5bf07fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425320b8f736a3633ce35a266352b069c3e0b9208ca46c849884719b5bf07fc6->enter($__internal_425320b8f736a3633ce35a266352b069c3e0b9208ca46c849884719b5bf07fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c631646fd09b191e35cb1f574abe1ae75f433bce3a3aa0cc908c375f638803d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c631646fd09b191e35cb1f574abe1ae75f433bce3a3aa0cc908c375f638803d5->enter($__internal_c631646fd09b191e35cb1f574abe1ae75f433bce3a3aa0cc908c375f638803d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_425320b8f736a3633ce35a266352b069c3e0b9208ca46c849884719b5bf07fc6->leave($__internal_425320b8f736a3633ce35a266352b069c3e0b9208ca46c849884719b5bf07fc6_prof);

        
        $__internal_c631646fd09b191e35cb1f574abe1ae75f433bce3a3aa0cc908c375f638803d5->leave($__internal_c631646fd09b191e35cb1f574abe1ae75f433bce3a3aa0cc908c375f638803d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
