# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Model for entity templates
    #
    class EntityDefinitionModel
      # @return [String] Gets or sets the identifier.
      attr_accessor :id

      # @return [DateTime] Gets or sets the creation time.
      attr_accessor :creation_time

      # @return [DateTime] Gets or sets the modification time.
      attr_accessor :modification_time

      # @return [Integer] Gets or sets the type of template.
      attr_accessor :type

      # @return [String] Gets or sets the category of template.
      attr_accessor :category

      # @return [String] Gets or sets the name of template.
      attr_accessor :name

      # @return [Boolean] Gets or sets if the template has classes.
      attr_accessor :has_class

      # @return [Boolean] Gets or sets if the template has security.
      attr_accessor :has_security

      # @return [Boolean] Gets or sets if the template has profiles.
      attr_accessor :has_profiles

      # @return [Boolean] Gets or sets the has items.
      attr_accessor :has_items

      # @return [String] Gets or sets the small image.
      attr_accessor :small_image

      # @return [String] Gets or sets the large image.
      attr_accessor :large_image

      # @return [Boolean] Gets or sets if the template has auditing enabled.
      attr_accessor :has_audit

      # @return [Boolean] Gets or sets if the template allows viewing images.
      attr_accessor :allows_view_images

      # @return [Boolean] Gets or sets if the entity is created in a review
      # state.
      attr_accessor :is_review_state

      # @return [String] Gets or sets the reserved string1.
      attr_accessor :reserved_string1

      # @return [String] Gets or sets the reserved string2.
      attr_accessor :reserved_string2

      # @return [Integer] Gets or sets the reserved int1.
      attr_accessor :reserved_int1

      # @return [Integer] Gets or sets the reserved int2.
      attr_accessor :reserved_int2

      # @return [Array<Integer>] Gets or sets the drawers.
      attr_accessor :drawers

      # @return [Array<ProfileDefinitionModel>] Gets or sets the profiles.
      attr_accessor :profiles


      #
      # Mapper for EntityDefinitionModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'EntityDefinitionModel',
          type: {
            name: 'Composite',
            class_name: 'EntityDefinitionModel',
            model_properties: {
              id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ID',
                type: {
                  name: 'String'
                }
              },
              creation_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'CreationTime',
                type: {
                  name: 'DateTime'
                }
              },
              modification_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ModificationTime',
                type: {
                  name: 'DateTime'
                }
              },
              type: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Type',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              category: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Category',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              name: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Name',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              has_class: {
                client_side_validation: true,
                required: false,
                serialized_name: 'HasClass',
                type: {
                  name: 'Boolean'
                }
              },
              has_security: {
                client_side_validation: true,
                required: false,
                serialized_name: 'HasSecurity',
                type: {
                  name: 'Boolean'
                }
              },
              has_profiles: {
                client_side_validation: true,
                required: false,
                serialized_name: 'HasProfiles',
                type: {
                  name: 'Boolean'
                }
              },
              has_items: {
                client_side_validation: true,
                required: false,
                serialized_name: 'HasItems',
                type: {
                  name: 'Boolean'
                }
              },
              small_image: {
                client_side_validation: true,
                required: false,
                serialized_name: 'SmallImage',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              large_image: {
                client_side_validation: true,
                required: false,
                serialized_name: 'LargeImage',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              has_audit: {
                client_side_validation: true,
                required: false,
                serialized_name: 'HasAudit',
                type: {
                  name: 'Boolean'
                }
              },
              allows_view_images: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AllowsViewImages',
                type: {
                  name: 'Boolean'
                }
              },
              is_review_state: {
                client_side_validation: true,
                required: false,
                serialized_name: 'IsReviewState',
                type: {
                  name: 'Boolean'
                }
              },
              reserved_string1: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedString1',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              reserved_string2: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedString2',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
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
              drawers: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Drawers',
                type: {
                  name: 'Sequence',
                  element: {
                      client_side_validation: true,
                      required: false,
                      serialized_name: 'NumberElementType',
                      type: {
                        name: 'Number'
                      }
                  }
                }
              },
              profiles: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Profiles',
                type: {
                  name: 'Sequence',
                  element: {
                      client_side_validation: true,
                      required: false,
                      serialized_name: 'ProfileDefinitionModelElementType',
                      type: {
                        name: 'Composite',
                        class_name: 'ProfileDefinitionModel'
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
