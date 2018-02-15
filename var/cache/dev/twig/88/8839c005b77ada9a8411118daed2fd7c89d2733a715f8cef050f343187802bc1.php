<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f9863957df1810f8c446571836959c8a94fc6eae21e83bc242d170c8ef959fde extends Twig_Template
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
        $__internal_a7e22b0e61d30d017d71bd9012cf2fb728e6fbe89377a47c3d755305af4cf3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e22b0e61d30d017d71bd9012cf2fb728e6fbe89377a47c3d755305af4cf3e9->enter($__internal_a7e22b0e61d30d017d71bd9012cf2fb728e6fbe89377a47c3d755305af4cf3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7132eebf404b3c6f69ed59c4707ba75270df53828237b1e296b3b00e67b28c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7132eebf404b3c6f69ed59c4707ba75270df53828237b1e296b3b00e67b28c6e->enter($__internal_7132eebf404b3c6f69ed59c4707ba75270df53828237b1e296b3b00e67b28c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a7e22b0e61d30d017d71bd9012cf2fb728e6fbe89377a47c3d755305af4cf3e9->leave($__internal_a7e22b0e61d30d017d71bd9012cf2fb728e6fbe89377a47c3d755305af4cf3e9_prof);

        
        $__internal_7132eebf404b3c6f69ed59c4707ba75270df53828237b1e296b3b00e67b28c6e->leave($__internal_7132eebf404b3c6f69ed59c4707ba75270df53828237b1e296b3b00e67b28c6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
