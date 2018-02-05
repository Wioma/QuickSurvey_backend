<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e48839151c8214d267fcde6312130f47da8b6b1b554d71f8301a3b6bf239fa8f extends Twig_Template
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
        $__internal_a74fcf87279674a0d8c36dd0f6b3dd436d62040ca27894c4b66bae988d2165a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74fcf87279674a0d8c36dd0f6b3dd436d62040ca27894c4b66bae988d2165a7->enter($__internal_a74fcf87279674a0d8c36dd0f6b3dd436d62040ca27894c4b66bae988d2165a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_eb8755701ae286dc8d1469de5fe35d6b8857d43f18a0f8e59e56f0e4d84824a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8755701ae286dc8d1469de5fe35d6b8857d43f18a0f8e59e56f0e4d84824a2->enter($__internal_eb8755701ae286dc8d1469de5fe35d6b8857d43f18a0f8e59e56f0e4d84824a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a74fcf87279674a0d8c36dd0f6b3dd436d62040ca27894c4b66bae988d2165a7->leave($__internal_a74fcf87279674a0d8c36dd0f6b3dd436d62040ca27894c4b66bae988d2165a7_prof);

        
        $__internal_eb8755701ae286dc8d1469de5fe35d6b8857d43f18a0f8e59e56f0e4d84824a2->leave($__internal_eb8755701ae286dc8d1469de5fe35d6b8857d43f18a0f8e59e56f0e4d84824a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
