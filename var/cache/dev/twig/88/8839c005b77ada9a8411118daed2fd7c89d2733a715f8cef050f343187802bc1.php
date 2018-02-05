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
        $__internal_de32087104f3cddbf9b39054285f8ab08a71da3f31e8454abe0e24c12c673d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de32087104f3cddbf9b39054285f8ab08a71da3f31e8454abe0e24c12c673d7f->enter($__internal_de32087104f3cddbf9b39054285f8ab08a71da3f31e8454abe0e24c12c673d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_400b8cf65f9827abb34d788cbed27d725f3f504223f7dc84651f31567d1d5106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400b8cf65f9827abb34d788cbed27d725f3f504223f7dc84651f31567d1d5106->enter($__internal_400b8cf65f9827abb34d788cbed27d725f3f504223f7dc84651f31567d1d5106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_de32087104f3cddbf9b39054285f8ab08a71da3f31e8454abe0e24c12c673d7f->leave($__internal_de32087104f3cddbf9b39054285f8ab08a71da3f31e8454abe0e24c12c673d7f_prof);

        
        $__internal_400b8cf65f9827abb34d788cbed27d725f3f504223f7dc84651f31567d1d5106->leave($__internal_400b8cf65f9827abb34d788cbed27d725f3f504223f7dc84651f31567d1d5106_prof);

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
