<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f17305099262a6c0da45964cca78cefc60c73008cf963128b5814937f631c556 extends Twig_Template
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
        $__internal_c722d0e04c83b3673b525b3ce704b7bab2e40e7de80b7f5a5ff1b1971562f668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c722d0e04c83b3673b525b3ce704b7bab2e40e7de80b7f5a5ff1b1971562f668->enter($__internal_c722d0e04c83b3673b525b3ce704b7bab2e40e7de80b7f5a5ff1b1971562f668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b540b5c8e2da44a810aaed55d58af145e97bc4b500fc54aeb1a51578e4e7f9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b540b5c8e2da44a810aaed55d58af145e97bc4b500fc54aeb1a51578e4e7f9c3->enter($__internal_b540b5c8e2da44a810aaed55d58af145e97bc4b500fc54aeb1a51578e4e7f9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c722d0e04c83b3673b525b3ce704b7bab2e40e7de80b7f5a5ff1b1971562f668->leave($__internal_c722d0e04c83b3673b525b3ce704b7bab2e40e7de80b7f5a5ff1b1971562f668_prof);

        
        $__internal_b540b5c8e2da44a810aaed55d58af145e97bc4b500fc54aeb1a51578e4e7f9c3->leave($__internal_b540b5c8e2da44a810aaed55d58af145e97bc4b500fc54aeb1a51578e4e7f9c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
