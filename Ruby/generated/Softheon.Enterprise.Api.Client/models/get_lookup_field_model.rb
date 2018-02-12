# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Model for the GET Lookup Fields input parameters
    #
    class GetLookupFieldModel
      # @return [String] Gets or sets the name of the column.
      attr_accessor :column_name

      # @return [String] Gets or sets the column value.
      attr_accessor :column_value


      #
      # Mapper for GetLookupFieldModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'GetLookupFieldModel',
          type: {
            name: 'Composite',
            class_name: 'GetLookupFieldModel',
            model_properties: {
              column_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ColumnName',
                type: {
                  name: 'String'
                }
              },
              column_value: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ColumnValue',
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
