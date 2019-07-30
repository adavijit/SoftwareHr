<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\xampp\htdocs\git\HRSoftwareModule\vendor\cakephp\bake\src\Template\Bake\\tests\test_case.twig */
class __TwigTemplate_762024cca697e7f28aa93a05daf2ac3bcbf0464e5059f86efd340f16baaad537 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "D:\\xampp\\htdocs\\git\\HRSoftwareModule\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\tests\\test_case.twig"));

        // line 18
        $context["isController"] = (twig_lower_filter($this->env, ($context["type"] ?? null)) == "controller");
        // line 19
        $context["isShell"] = (twig_lower_filter($this->env, ($context["type"] ?? null)) == "shell");
        // line 20
        $context["isCommand"] = (twig_lower_filter($this->env, ($context["type"] ?? null)) == "command");
        // line 21
        if (($context["isController"] ?? null)) {
            // line 22
            $context["traitName"] = "IntegrationTestTrait";
        } elseif ((        // line 23
($context["isShell"] ?? null) || ($context["isCommand"] ?? null))) {
            // line 24
            $context["traitName"] = "ConsoleIntegrationTestTrait";
        }
        // line 26
        $context["uses"] = twig_array_merge(($context["uses"] ?? null), [0 => "Cake\\TestSuite\\TestCase"]);
        // line 27
        if (($context["traitName"] ?? null)) {
            // line 28
            $context["uses"] = twig_array_merge(($context["uses"] ?? null), [0 => ("Cake\\TestSuite\\" . ($context["traitName"] ?? null))]);
        }
        // line 31
        $context["uses"] = twig_sort_filter(($context["uses"] ?? null));
        // line 32
        echo "<?php
namespace ";
        // line 33
        echo twig_escape_filter($this->env, ($context["baseNamespace"] ?? null), "html", null, true);
        echo "\\Test\\TestCase\\";
        echo twig_escape_filter($this->env, ($context["subNamespace"] ?? null), "html", null, true);
        echo ";

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["uses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dependency"]) {
            // line 36
            echo "use ";
            echo twig_escape_filter($this->env, $context["dependency"], "html", null, true);
            echo ";
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
/**
 * ";
        // line 40
        echo twig_escape_filter($this->env, ($context["fullClassName"] ?? null), "html", null, true);
        echo " Test Case
 */
class ";
        // line 42
        echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
        echo "Test extends TestCase
{
";
        // line 44
        if (($context["traitName"] ?? null)) {
            // line 45
            echo "    use ";
            echo twig_escape_filter($this->env, ($context["traitName"] ?? null), "html", null, true);
            echo ";
";
            // line 46
            if ((((($context["properties"] ?? null) || ($context["fixtures"] ?? null)) || ($context["construction"] ?? null)) || ($context["methods"] ?? null))) {
                // line 47
                echo "
";
            }
        }
        // line 50
        if (($context["properties"] ?? null)) {
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["propertyInfo"]) {
                // line 52
                if (($this->getAttribute($context["loop"], "index", []) > 1)) {
                    // line 53
                    echo "
";
                }
                // line 55
                echo "    /**
     * ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "description", []), "html", null, true);
                echo "
     *
     * @var ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "type", []), "html", null, true);
                echo "
     */
    public \$";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "name", []), "html", null, true);
                if (($this->getAttribute($context["propertyInfo"], "value", [], "any", true, true) && $this->getAttribute($context["propertyInfo"], "value", []))) {
                    echo " = ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "value", []), "html", null, true);
                }
                echo ";
";
                // line 61
                if (($this->getAttribute($context["loop"], "last", []) && ((($context["fixtures"] ?? null) || ($context["construction"] ?? null)) || ($context["methods"] ?? null)))) {
                    // line 62
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propertyInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        if (($context["fixtures"] ?? null)) {
            // line 68
            echo "    /**
     * Fixtures
     *
     * @var array
     */
    public \$fixtures = [";
            // line 73
            echo $this->getAttribute(($context["Bake"] ?? null), "stringifyList", [0 => $this->env->getExtension('Jasny\Twig\ArrayExtension')->values(($context["fixtures"] ?? null))], "method");
            echo "];
";
            // line 74
            if ((($context["construction"] ?? null) || ($context["methods"] ?? null))) {
                // line 75
                echo "
";
            }
        }
        // line 79
        if (($context["construction"] ?? null)) {
            // line 80
            echo "    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
";
            // line 88
            if (($context["preConstruct"] ?? null)) {
                // line 89
                echo "        ";
                echo ($context["preConstruct"] ?? null);
                echo "
";
            }
            // line 91
            if (($context["isCommand"] ?? null)) {
                // line 92
                echo "        ";
                echo ($context["construction"] ?? null);
                echo "
";
            } else {
                // line 94
                echo "        \$this->";
                echo ((($context["subject"] ?? null) . " = ") . ($context["construction"] ?? null));
                echo "
";
            }
            // line 96
            if (($context["postConstruct"] ?? null)) {
                // line 97
                echo "        ";
                echo ($context["postConstruct"] ?? null);
                echo "
";
            }
            // line 99
            echo "    }
";
            // line 100
            if ( !($context["isCommand"] ?? null)) {
                // line 101
                echo "
    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset(\$this->";
                // line 109
                echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
                echo ");

        parent::tearDown();
    }
";
                // line 113
                if (($context["methods"] ?? null)) {
                    // line 114
                    echo "
";
                }
            }
        }
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 120
            if (($this->getAttribute($context["loop"], "index", []) > 1)) {
                // line 121
                echo "
";
            }
            // line 123
            echo "    /**
     * Test ";
            // line 124
            echo twig_escape_filter($this->env, $context["method"], "html", null, true);
            echo " method
     *
     * @return void
     */
    public function test";
            // line 128
            echo twig_escape_filter($this->env, Cake\Utility\Inflector::camelize($context["method"]), "html", null, true);
            echo "()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        if ( !($context["methods"] ?? null)) {
            // line 135
            if (((((($context["traitName"] ?? null) || ($context["properties"] ?? null)) || ($context["fixtures"] ?? null)) || ($context["construction"] ?? null)) || ($context["methods"] ?? null))) {
                // line 136
                echo "
";
            }
            // line 138
            echo "    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
";
        }
        // line 148
        echo "}
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\git\\HRSoftwareModule\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\tests\\test_case.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 148,  325 => 138,  321 => 136,  319 => 135,  317 => 134,  298 => 128,  291 => 124,  288 => 123,  284 => 121,  282 => 120,  265 => 119,  259 => 114,  257 => 113,  250 => 109,  240 => 101,  238 => 100,  235 => 99,  229 => 97,  227 => 96,  221 => 94,  215 => 92,  213 => 91,  207 => 89,  205 => 88,  195 => 80,  193 => 79,  188 => 75,  186 => 74,  182 => 73,  175 => 68,  173 => 67,  156 => 62,  154 => 61,  146 => 60,  141 => 58,  136 => 56,  133 => 55,  129 => 53,  127 => 52,  110 => 51,  108 => 50,  103 => 47,  101 => 46,  96 => 45,  94 => 44,  89 => 42,  84 => 40,  80 => 38,  71 => 36,  67 => 35,  60 => 33,  57 => 32,  55 => 31,  52 => 28,  50 => 27,  48 => 26,  45 => 24,  43 => 23,  41 => 22,  39 => 21,  37 => 20,  35 => 19,  33 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * Test Case bake template
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{% set isController = type|lower == 'controller' %}
{% set isShell = type|lower == 'shell' %}
{% set isCommand = type|lower == 'command' %}
{% if isController %}
    {%- set traitName = 'IntegrationTestTrait' %}
{% elseif isShell or isCommand %}
    {%- set traitName = 'ConsoleIntegrationTestTrait' %}
{% endif %}
{%- set uses = uses|merge([\"Cake\\\\TestSuite\\\\TestCase\"]) %}
{% if traitName %}
    {%- set uses = uses|merge([\"Cake\\\\TestSuite\\\\#{traitName}\"]) %}
{% endif %}

{%- set uses = uses|sort %}
<?php
namespace {{ baseNamespace }}\\Test\\TestCase\\{{ subNamespace }};

{% for dependency in uses %}
use {{ dependency }};
{% endfor %}

/**
 * {{ fullClassName }} Test Case
 */
class {{ className }}Test extends TestCase
{
{% if traitName %}
    use {{ traitName }};
{% if properties or fixtures or construction or methods %}

{% endif %}
{% endif %}
{% if properties %}
{% for propertyInfo in properties %}
{% if loop.index > 1 %}

{% endif %}
    /**
     * {{ propertyInfo.description }}
     *
     * @var {{ propertyInfo.type }}
     */
    public \${{ propertyInfo.name }}{% if propertyInfo.value is defined and propertyInfo.value %} = {{ propertyInfo.value }}{% endif %};
{% if loop.last and (fixtures or construction or methods) %}

{% endif %}
{% endfor %}
{% endif %}

{%- if fixtures %}
    /**
     * Fixtures
     *
     * @var array
     */
    public \$fixtures = [{{ Bake.stringifyList(fixtures|values)|raw }}];
{% if construction or methods %}

{% endif %}
{% endif %}

{%- if construction %}
    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
{% if preConstruct %}
        {{ preConstruct|raw }}
{% endif %}
{% if isCommand %}
        {{ construction|raw }}
{% else %}
        \$this->{{ (subject ~ ' = ' ~ construction)|raw }}
{% endif %}
{% if postConstruct %}
        {{ postConstruct|raw }}
{% endif %}
    }
{% if not isCommand %}

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset(\$this->{{ subject }});

        parent::tearDown();
    }
{% if methods %}

{% endif %}
{% endif %}
{% endif %}

{%- for method in methods %}
{% if loop.index > 1 %}

{% endif %}
    /**
     * Test {{ method }} method
     *
     * @return void
     */
    public function test{{ method|camelize }}()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
{% endfor %}

{%- if not methods %}
{%- if traitName or properties or fixtures or construction or methods %}

{% endif %}
    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
{% endif %}
}
", "D:\\xampp\\htdocs\\git\\HRSoftwareModule\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\tests\\test_case.twig", "D:\\xampp\\htdocs\\git\\HRSoftwareModule\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\tests\\test_case.twig");
    }
}
