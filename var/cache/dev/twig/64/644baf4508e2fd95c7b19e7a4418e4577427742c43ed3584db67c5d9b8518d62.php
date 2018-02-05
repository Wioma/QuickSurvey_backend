<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_eb52530bedb7366b38cecea1a4c0a67997ca88cf61704d8fc924ac40c0effce3 extends Twig_Template
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
        $__internal_1783889e127a8cf2895bbb913857d35d0a42f53f26ad0d7f93eabd39df6d401c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1783889e127a8cf2895bbb913857d35d0a42f53f26ad0d7f93eabd39df6d401c->enter($__internal_1783889e127a8cf2895bbb913857d35d0a42f53f26ad0d7f93eabd39df6d401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a5bbe8cb20265e7cbf0f57f934420a88aea2cbc6a679f5ec66e1d0f4bb533090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bbe8cb20265e7cbf0f57f934420a88aea2cbc6a679f5ec66e1d0f4bb533090->enter($__internal_a5bbe8cb20265e7cbf0f57f934420a88aea2cbc6a679f5ec66e1d0f4bb533090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1783889e127a8cf2895bbb913857d35d0a42f53f26ad0d7f93eabd39df6d401c->leave($__internal_1783889e127a8cf2895bbb913857d35d0a42f53f26ad0d7f93eabd39df6d401c_prof);

        
        $__internal_a5bbe8cb20265e7cbf0f57f934420a88aea2cbc6a679f5ec66e1d0f4bb533090->leave($__internal_a5bbe8cb20265e7cbf0f57f934420a88aea2cbc6a679f5ec66e1d0f4bb533090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
