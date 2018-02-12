# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Model for the GET Extension input parameters
    #
    class GetExtensionRequestModel
      # @return [Integer] Gets or sets the drawer identifier.
      attr_accessor :drawer_id

      # @return [Integer] Gets or sets the entity identifier.
      attr_accessor :entity_id

      # @return [Integer] Gets or sets the profile identifier.
      attr_accessor :profile_id

      # @return [Integer] Gets or sets the extension identifier.
      attr_accessor :id

      # @return [Integer] Gets or sets the type of the extension.
      attr_accessor :type

      # @return [Integer] Gets or sets the page number.
      attr_accessor :page

      # @return [Integer] Gets or sets the size of the page.
      attr_accessor :page_size

      # @return [Enum] Gets or sets the order. Possible values include:
      # 'Unspecified', 'Ascending', 'Descending'
      attr_accessor :sort_order

      # @return [Enum] Gets or sets the column to order by. Possible values
      # include: 'RowNumber', 'ID', 'Type', 'String', 'Integer', 'Double',
      # 'Date'
      attr_accessor :sort_by


      #
      # Mapper for GetExtensionRequestModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'GetExtensionRequestModel',
          type: {
            name: 'Composite',
            class_name: 'GetExtensionRequestModel',
            model_properties: {
              drawer_id: {
                client_side_validation: true,
                required: true,
                serialized_name: 'DrawerID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              entity_id: {
                client_side_validation: true,
                required: true,
                serialized_name: 'EntityID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              profile_id: {
                client_side_validation: true,
                required: true,
                serialized_name: 'ProfileID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              type: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Type',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 0
                },
                type: {
                  name: 'Number'
                }
              },
              page: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Page',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              page_size: {
                client_side_validation: true,
                required: false,
                serialized_name: 'PageSize',
                constraints: {
                  InclusiveMaximum: 1000,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              sort_order: {
                client_side_validation: true,
                required: false,
                serialized_name: 'SortOrder',
                type: {
                  name: 'String'
                }
              },
              sort_by: {
                client_side_validation: true,
                required: false,
                serialized_name: 'SortBy',
                type: {
                  name: 'String'
                }
              }
            }
          }
        }
      end
    end
  end
end