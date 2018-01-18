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
        $__internal_a8f16a66708235a10e7051dd026f6b743d131db1ebabd7b85672e04d9b944d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f16a66708235a10e7051dd026f6b743d131db1ebabd7b85672e04d9b944d01->enter($__internal_a8f16a66708235a10e7051dd026f6b743d131db1ebabd7b85672e04d9b944d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_bff725c93239d815128a72c6299753854b33657b51c8b69c1889e4ed5cf17e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff725c93239d815128a72c6299753854b33657b51c8b69c1889e4ed5cf17e19->enter($__internal_bff725c93239d815128a72c6299753854b33657b51c8b69c1889e4ed5cf17e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_a8f16a66708235a10e7051dd026f6b743d131db1ebabd7b85672e04d9b944d01->leave($__internal_a8f16a66708235a10e7051dd026f6b743d131db1ebabd7b85672e04d9b944d01_prof);

        
        $__internal_bff725c93239d815128a72c6299753854b33657b51c8b69c1889e4ed5cf17e19->leave($__internal_bff725c93239d815128a72c6299753854b33657b51c8b69c1889e4ed5cf17e19_prof);

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
