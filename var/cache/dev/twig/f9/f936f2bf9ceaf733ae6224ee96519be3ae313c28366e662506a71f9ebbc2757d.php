<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_cbe4afd5d73b2a1997348d053e62fbabf6db6a6712f890ddbe34e6fa67842b5b extends Twig_Template
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
        $__internal_b73cf9e03d738972fa783dc50df0d825e79efb0ab5406db357834abf2865a7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73cf9e03d738972fa783dc50df0d825e79efb0ab5406db357834abf2865a7fc->enter($__internal_b73cf9e03d738972fa783dc50df0d825e79efb0ab5406db357834abf2865a7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_1158b8568be1495fab46b8fcc723d9c9135c047e2ec5b23510a66807d996af47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1158b8568be1495fab46b8fcc723d9c9135c047e2ec5b23510a66807d996af47->enter($__internal_1158b8568be1495fab46b8fcc723d9c9135c047e2ec5b23510a66807d996af47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_b73cf9e03d738972fa783dc50df0d825e79efb0ab5406db357834abf2865a7fc->leave($__internal_b73cf9e03d738972fa783dc50df0d825e79efb0ab5406db357834abf2865a7fc_prof);

        
        $__internal_1158b8568be1495fab46b8fcc723d9c9135c047e2ec5b23510a66807d996af47->leave($__internal_1158b8568be1495fab46b8fcc723d9c9135c047e2ec5b23510a66807d996af47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
