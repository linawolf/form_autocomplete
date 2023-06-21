
=================
form_autocomplete
=================

Autocomplete properties for typo3/cms-form for TYPO3 v11.5 and v12.4.
Is included in the TYPO3 Core starting with TYPO3 13.0, see Feature
https://review.typo3.org/c/Packages/TYPO3.CMS/+/79208

.. _concepts-autocomplete:

Autocomplete
============

The :guilabel:`Autocomplete` select in the form editor can be used to
define :html:`autocomplete` properties for input fields. This extension
predefines the most common of the input purposes that are widely
recognized by assistive technologies and
`recommended by the W3C <https://www.w3.org/TR/WCAG21/#input-purposes>`__. The
HTML standard allows arbitrary values.

If you need to provide additional fields, you can reconfigure the autocomplete
field with additional select options:

.. _concepts-autocomplete-add-options:

Add Autocomplete options to the backend editor
----------------------------------------------

Extend the EXT:form configuration:

..  code-block:: typoscript
    :caption: EXT:my_sitepackage/Configuration/TypoScript/setup.typoscript

    plugin.tx_form {
      settings {
        yamlConfigurations {
          # register your own additional configuration
          # choose a number higher than 10 (10 is reserved)
          100 = EXT:my_sitepackage/Configuration/Form/CustomFormSetup.yaml
        }
      }
    }

Redefine the backend input in the extended YAML:

..  code-block:: yaml
    :caption: EXT:my_sitepackage/Configuration/Form/CustomFormSetup.yaml

    prototypes:
      standard:
        formElementsDefinition:
          Text:
            formEditor:
              editors:
                600:
                  # Choose an index that is not in use yet
                  12345:
                    value: 'cc-name'
                    label: 'cc-name - Full name as given on the payment instrument'


