<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_587e2e4734995c240a4572a35c170faaee0e1a65482638dc7483735a6d57648b extends Twig_Template
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
        $__internal_260bc670b20328828cc80d1228317c981470350b4943c02f06308f1bcc8c0c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260bc670b20328828cc80d1228317c981470350b4943c02f06308f1bcc8c0c50->enter($__internal_260bc670b20328828cc80d1228317c981470350b4943c02f06308f1bcc8c0c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_251a10d99b739a6f82c7aa201e7e874eddaf26445e972d966f205f4c45b16e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251a10d99b739a6f82c7aa201e7e874eddaf26445e972d966f205f4c45b16e7c->enter($__internal_251a10d99b739a6f82c7aa201e7e874eddaf26445e972d966f205f4c45b16e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_260bc670b20328828cc80d1228317c981470350b4943c02f06308f1bcc8c0c50->leave($__internal_260bc670b20328828cc80d1228317c981470350b4943c02f06308f1bcc8c0c50_prof);

        
        $__internal_251a10d99b739a6f82c7aa201e7e874eddaf26445e972d966f205f4c45b16e7c->leave($__internal_251a10d99b739a6f82c7aa201e7e874eddaf26445e972d966f205f4c45b16e7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
