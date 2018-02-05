<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_78e7a6c99b722d6c2e55173c45b475cf03829113f2ec97f8a808c8b252c2e19b extends Twig_Template
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
        $__internal_8e7c8c31d04cd32d872765c4f7d99544c35a9d8035ac5b0db8c2b040d82d5434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7c8c31d04cd32d872765c4f7d99544c35a9d8035ac5b0db8c2b040d82d5434->enter($__internal_8e7c8c31d04cd32d872765c4f7d99544c35a9d8035ac5b0db8c2b040d82d5434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c79921c3846dae93cc005046fd86e8cb1bd6719e888e6f3f8ea705f5ea127e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79921c3846dae93cc005046fd86e8cb1bd6719e888e6f3f8ea705f5ea127e33->enter($__internal_c79921c3846dae93cc005046fd86e8cb1bd6719e888e6f3f8ea705f5ea127e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_8e7c8c31d04cd32d872765c4f7d99544c35a9d8035ac5b0db8c2b040d82d5434->leave($__internal_8e7c8c31d04cd32d872765c4f7d99544c35a9d8035ac5b0db8c2b040d82d5434_prof);

        
        $__internal_c79921c3846dae93cc005046fd86e8cb1bd6719e888e6f3f8ea705f5ea127e33->leave($__internal_c79921c3846dae93cc005046fd86e8cb1bd6719e888e6f3f8ea705f5ea127e33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
