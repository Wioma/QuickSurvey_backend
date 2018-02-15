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
        $__internal_68cfe59d1cf16658beda3dfe9cc07eff838caf951cbcda21f78a01576993d000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cfe59d1cf16658beda3dfe9cc07eff838caf951cbcda21f78a01576993d000->enter($__internal_68cfe59d1cf16658beda3dfe9cc07eff838caf951cbcda21f78a01576993d000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ecd7e15e877a4130a04dc05c4931acc9d681f603f4066da8b79ce5ce8eb87d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd7e15e877a4130a04dc05c4931acc9d681f603f4066da8b79ce5ce8eb87d15->enter($__internal_ecd7e15e877a4130a04dc05c4931acc9d681f603f4066da8b79ce5ce8eb87d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_68cfe59d1cf16658beda3dfe9cc07eff838caf951cbcda21f78a01576993d000->leave($__internal_68cfe59d1cf16658beda3dfe9cc07eff838caf951cbcda21f78a01576993d000_prof);

        
        $__internal_ecd7e15e877a4130a04dc05c4931acc9d681f603f4066da8b79ce5ce8eb87d15->leave($__internal_ecd7e15e877a4130a04dc05c4931acc9d681f603f4066da8b79ce5ce8eb87d15_prof);

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
