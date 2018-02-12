# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Model for Template Fields
    #
    class FieldDefinitionModel
      # @return [String] Gets or sets the identifier.
      attr_accessor :id

      # @return [String] Gets or sets the name.
      attr_accessor :name

      # @return [String] Gets or sets the XML tag.
      attr_accessor :xml_tag

      # @return [Enum] Gets or sets the type. Possible values include:
      # 'Undefined', 'String', 'Integer', 'Double', 'DateTime', 'Paragraph',
      # 'CheckBox', 'RadioButton', 'ComboBox', 'ListBox', 'Table', 'LargeText',
      # 'ComboString'
      attr_accessor :type

      # @return [Integer] Gets or sets the index.
      attr_accessor :index

      # @return [Integer] Gets or sets the position.
      attr_accessor :position

      # @return [String] Gets or sets the note.
      attr_accessor :note

      # @return [Boolean] Gets or sets a value indicating whether this instance
      # is enabled.
      attr_accessor :is_enabled

      # @return [Enum] Gets or sets a value indicating whether this instance is
      # required. Possible values include: 'NotRequired', 'Always', 'OnAccept'
      attr_accessor :is_required

      # @return [Boolean] Gets or sets a value indicating whether this instance
      # is protected.
      attr_accessor :is_protected

      # @return [String] Gets or sets the default value.
      attr_accessor :default

      # @return [String] Gets or sets the mask.
      attr_accessor :mask

      # @return [Integer] Gets or sets the length.
      attr_accessor :length

      # @return [Boolean] Gets or sets a value indicating whether this instance
      # is multiline.
      attr_accessor :is_multiline

      # @return [String] Gets or sets the format.
      attr_accessor :format

      # @return [Boolean] Gets or sets a value indicating whether this instance
      # is sorted.
      attr_accessor :is_sorted

      # @return [Integer] Gets or sets the select.
      attr_accessor :select

      # @return [String] Gets or sets the formula.
      attr_accessor :formula

      # @return [Boolean] Gets or sets a value indicating whether this instance
      # has validation.
      attr_accessor :has_validation

      # @return [String] Gets or sets the validation column.
      attr_accessor :validation_column

      # @return [Integer] Gets or sets the found operation.
      attr_accessor :found_operation

      # @return [Integer] Gets or sets the not found operation.
      attr_accessor :not_found_operation

      # @return [Integer] Gets or sets the sample image.
      attr_accessor :sample_image

      # @return [String] Gets or sets the lookup.
      attr_accessor :lookup

      # @return [Boolean] Gets or sets a value indicating whether this instance
      # has linking enabled.
      attr_accessor :has_link

      # @return [Integer] Gets or sets the type of the link entity.
      attr_accessor :link_entity_type

      # @return [String] Gets or sets the link profile.
      attr_accessor :link_profile

      # @return [String] Gets or sets the link field.
      attr_accessor :link_field

      # @return [String] Gets or sets the reserved string1.
      attr_accessor :reserved_string1

      # @return [String] Gets or sets the reserved string2.
      attr_accessor :reserved_string2

      # @return [Integer] Gets or sets the reserved int1.
      attr_accessor :reserved_int1

      # @return [Integer] Gets or sets the reserved int2.
      attr_accessor :reserved_int2

      # @return [Boolean] Gets or sets a value indicating whether [reserved
      # bit1].
      attr_accessor :reserved_bit1

      # @return [Boolean] Gets or sets a value indicating whether [reserved
      # bit2].
      attr_accessor :reserved_bit2

      # @return [Array<ItemDefinitionModel>] Gets or sets the template items.
      attr_accessor :items

      # @return [Array<FieldDefinitionModel>] Gets or sets the fields.
      attr_accessor :fields


      #
      # Mapper for FieldDefinitionModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'FieldDefinitionModel',
          type: {
            name: 'Composite',
            class_name: 'FieldDefinitionModel',
            model_properties: {
              id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ID',
                type: {
                  name: 'String'
                }
              },
              name: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Name',
                type: {
                  name: 'String'
                }
              },
              xml_tag: {
                client_side_validation: true,
                required: false,
                serialized_name: 'XmlTag',
                type: {
                  name: 'String'
                }
              },
              type: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Type',
                type: {
                  name: 'String'
                }
              },
              index: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Index',
                constraints: {
                  InclusiveMaximum: 32,
                  InclusiveMinimum: 0
                },
                type: {
                  name: 'Number'
                }
              },
              position: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Position',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 0
                },
                type: {
                  name: 'Number'
                }
              },
              note: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Note',
                type: {
                  name: 'String'
                }
              },
              is_enabled: {
                client_side_validation: true,
                required: false,
                serialized_name: 'IsEnabled',
                type: {
                  name: 'Boolean'
                }
              },
              is_required: {
                client_side_validation: true,
                required: false,
                serialized_name: 'IsRequired',
                type: {
                  name: 'String'
                }
              },
              is_protected: {
                client_side_validation: true,
                required: false,
                serialized_name: 'IsProtected',
                type: {
                  name: 'Boolean'
                }
              },
              default: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Default',
                type: {
                  name: 'String'
                }
              },
              mask: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Mask',
                type: {
                  name: 'String'
                }
              },
              length: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Length',
                type: {
                  name: 'Number'
                }
              },
              is_multiline: {
                client_side_validation: true,
                required: false,
                serialized_name: 'IsMultiline',
                type: {
                  name: 'Boolean'
                }
              },
              format: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Format',
                type: {
                  name: 'String'
                }
              },
              is_sorted: {
                client_side_validation: true,
                required: false,
                serialized_name: 'IsSorted',
                type: {
                  name: 'Boolean'
                }
              },
              select: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Select',
                type: {
                  name: 'Number'
                }
              },
              formula: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Formula',
                type: {
                  name: 'String'
                }
              },
              has_validation: {
                client_side_validation: true,
                required: false,
                serialized_name: 'HasValidation',
                type: {
                  name: 'Boolean'
                }
              },
              validation_column: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ValidationColumn',
                type: {
                  name: 'String'
                }
              },
              found_operation: {
                client_side_validation: true,
                required: false,
                serialized_name: 'FoundOperation',
                type: {
                  name: 'Number'
                }
              },
              not_found_operation: {
                client_side_validation: true,
                required: false,
                serialized_name: 'NotFoundOperation',
                type: {
                  name: 'Number'
                }
              },
              sample_image: {
                client_side_validation: true,
                required: false,
                serialized_name: 'SampleImage',
                type: {
                  name: 'Number'
                }
              },
              lookup: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Lookup',
                type: {
                  name: 'String'
                }
              },
              has_link: {
                client_side_validation: true,
                required: false,
                serialized_name: 'HasLink',
                type: {
                  name: 'Boolean'
                }
              },
              link_entity_type: {
                client_side_validation: true,
                required: false,
                serialized_name: 'LinkEntityType',
                type: {
                  name: 'Number'
                }
              },
              link_profile: {
                client_side_validation: true,
                required: false,
                serialized_name: 'LinkProfile',
                type: {
                  name: 'String'
                }
              },
              link_field: {
                client_side_validation: true,
                required: false,
                serialized_name: 'LinkField',
                type: {
                  name: 'String'
                }
              },
              reserved_string1: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedString1',
                type: {
                  name: 'String'
                }
              },
              reserved_string2: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedString2',
                type: {
                  name: 'String'
                }
              },
              reserved_int1: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedInt1',
                type: {
                  name: 'Number'
                }
              },
              reserved_int2: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedInt2',
                type: {
                  name: 'Number'
                }
              },
              reserved_bit1: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedBit1',
                type: {
                  name: 'Boolean'
                }
              },
              reserved_bit2: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedBit2',
                type: {
                  name: 'Boolean'
                }
              },
              items: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Items',
                type: {
                  name: 'Sequence',
                  element: {
                      client_side_validation: true,
                      required: false,
                      serialized_name: 'ItemDefinitionModelElementType',
                      type: {
                        name: 'Composite',
                        class_name: 'ItemDefinitionModel'
                      }
                  }
                }
              },
              fields: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Fields',
                type: {
                  name: 'Sequence',
                  element: {
                      client_side_validation: true,
                      required: false,
                      serialized_name: 'FieldDefinitionModelElementType',
                      type: {
                        name: 'Composite',
                        class_name: 'FieldDefinitionModel'
                      }
                  }
                }
              }
            }
          }
        }
      end
    end
  end
end