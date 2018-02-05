<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1968da54b1b82501e6c6639697ad7249f50d9a3283927f4b596619b1998623c1 extends Twig_Template
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
        $__internal_e1dc981600aaaef6a758a45d825ed162a1606a0a0420387d856747dcbaa7938c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1dc981600aaaef6a758a45d825ed162a1606a0a0420387d856747dcbaa7938c->enter($__internal_e1dc981600aaaef6a758a45d825ed162a1606a0a0420387d856747dcbaa7938c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e5891d198eb965f998af0034efc67a2d3b0300cd2de5fd5ef88e446ac16258e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5891d198eb965f998af0034efc67a2d3b0300cd2de5fd5ef88e446ac16258e1->enter($__internal_e5891d198eb965f998af0034efc67a2d3b0300cd2de5fd5ef88e446ac16258e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e1dc981600aaaef6a758a45d825ed162a1606a0a0420387d856747dcbaa7938c->leave($__internal_e1dc981600aaaef6a758a45d825ed162a1606a0a0420387d856747dcbaa7938c_prof);

        
        $__internal_e5891d198eb965f998af0034efc67a2d3b0300cd2de5fd5ef88e446ac16258e1->leave($__internal_e5891d198eb965f998af0034efc67a2d3b0300cd2de5fd5ef88e446ac16258e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
