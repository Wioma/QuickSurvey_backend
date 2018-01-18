<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_14a3df1942be9392caef1142c83c80c3b6a33fbe3c9c0f69d9dcf26d9736d6a3 extends Twig_Template
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
        $__internal_018dffe3aa3852eea7bd927efd0a88df55022902663f2a110aa1d7a0d1d47efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018dffe3aa3852eea7bd927efd0a88df55022902663f2a110aa1d7a0d1d47efb->enter($__internal_018dffe3aa3852eea7bd927efd0a88df55022902663f2a110aa1d7a0d1d47efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_670ec5d9488965ccbdc4f51749f58a0dcc7965fe86a1ab6d5c05cb23b25f9176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670ec5d9488965ccbdc4f51749f58a0dcc7965fe86a1ab6d5c05cb23b25f9176->enter($__internal_670ec5d9488965ccbdc4f51749f58a0dcc7965fe86a1ab6d5c05cb23b25f9176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_018dffe3aa3852eea7bd927efd0a88df55022902663f2a110aa1d7a0d1d47efb->leave($__internal_018dffe3aa3852eea7bd927efd0a88df55022902663f2a110aa1d7a0d1d47efb_prof);

        
        $__internal_670ec5d9488965ccbdc4f51749f58a0dcc7965fe86a1ab6d5c05cb23b25f9176->leave($__internal_670ec5d9488965ccbdc4f51749f58a0dcc7965fe86a1ab6d5c05cb23b25f9176_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
