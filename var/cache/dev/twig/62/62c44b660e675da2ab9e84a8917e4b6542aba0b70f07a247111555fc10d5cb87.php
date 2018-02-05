<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f7f177cbced10e49f2a01c1dc062add94bf56d97bb5624a7836351e521667326 extends Twig_Template
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
        $__internal_131b27fa6d0b2e335d30347570a8aa72adae476077b685b5f728cef7603f03fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131b27fa6d0b2e335d30347570a8aa72adae476077b685b5f728cef7603f03fd->enter($__internal_131b27fa6d0b2e335d30347570a8aa72adae476077b685b5f728cef7603f03fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e5b242d049139dc25aa656b8855cde9490546b9c46324d49c89833e34e0c5263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b242d049139dc25aa656b8855cde9490546b9c46324d49c89833e34e0c5263->enter($__internal_e5b242d049139dc25aa656b8855cde9490546b9c46324d49c89833e34e0c5263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_131b27fa6d0b2e335d30347570a8aa72adae476077b685b5f728cef7603f03fd->leave($__internal_131b27fa6d0b2e335d30347570a8aa72adae476077b685b5f728cef7603f03fd_prof);

        
        $__internal_e5b242d049139dc25aa656b8855cde9490546b9c46324d49c89833e34e0c5263->leave($__internal_e5b242d049139dc25aa656b8855cde9490546b9c46324d49c89833e34e0c5263_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
