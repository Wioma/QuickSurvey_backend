<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_90250b81b99ba3c6585a9eacfbf2bd653baf2f4698bc985f18215ac25791b833 extends Twig_Template
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
        $__internal_5373ea8dcf1701a9385d9128370b549cd90bfcddaddda0b479635c60431be89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5373ea8dcf1701a9385d9128370b549cd90bfcddaddda0b479635c60431be89e->enter($__internal_5373ea8dcf1701a9385d9128370b549cd90bfcddaddda0b479635c60431be89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_08636a37024cd7dfac3a83eaf36cceff5e598f8395c4b15d191b4e2dc780696a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08636a37024cd7dfac3a83eaf36cceff5e598f8395c4b15d191b4e2dc780696a->enter($__internal_08636a37024cd7dfac3a83eaf36cceff5e598f8395c4b15d191b4e2dc780696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5373ea8dcf1701a9385d9128370b549cd90bfcddaddda0b479635c60431be89e->leave($__internal_5373ea8dcf1701a9385d9128370b549cd90bfcddaddda0b479635c60431be89e_prof);

        
        $__internal_08636a37024cd7dfac3a83eaf36cceff5e598f8395c4b15d191b4e2dc780696a->leave($__internal_08636a37024cd7dfac3a83eaf36cceff5e598f8395c4b15d191b4e2dc780696a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
