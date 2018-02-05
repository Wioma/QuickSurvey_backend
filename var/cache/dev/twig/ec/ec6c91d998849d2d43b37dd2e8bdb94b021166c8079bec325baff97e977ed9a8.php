<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_81ddcfd25cddd2cce6467e46aa75d7652bc0ff2b41cd2a6b089512a10e529367 extends Twig_Template
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
        $__internal_df43f7755b00bb5ae9e94eb55905f0674f44c348a943a81b1de190fa799a5c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df43f7755b00bb5ae9e94eb55905f0674f44c348a943a81b1de190fa799a5c64->enter($__internal_df43f7755b00bb5ae9e94eb55905f0674f44c348a943a81b1de190fa799a5c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4f51daaaa36a6a2fb5eb398e8f63acdc8cf5575579893a0e38f8292d63098d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f51daaaa36a6a2fb5eb398e8f63acdc8cf5575579893a0e38f8292d63098d20->enter($__internal_4f51daaaa36a6a2fb5eb398e8f63acdc8cf5575579893a0e38f8292d63098d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_df43f7755b00bb5ae9e94eb55905f0674f44c348a943a81b1de190fa799a5c64->leave($__internal_df43f7755b00bb5ae9e94eb55905f0674f44c348a943a81b1de190fa799a5c64_prof);

        
        $__internal_4f51daaaa36a6a2fb5eb398e8f63acdc8cf5575579893a0e38f8292d63098d20->leave($__internal_4f51daaaa36a6a2fb5eb398e8f63acdc8cf5575579893a0e38f8292d63098d20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
