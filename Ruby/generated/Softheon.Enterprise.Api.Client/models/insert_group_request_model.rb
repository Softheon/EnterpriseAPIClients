# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Model for POST Group input Parameters.
    #
    class InsertGroupRequestModel
      # @return [String] Gets or sets the name.
      attr_accessor :name

      # @return [Enum] Gets or sets the type. Possible values include:
      # 'Generic', 'Access', 'Role'
      attr_accessor :type


      #
      # Mapper for InsertGroupRequestModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'InsertGroupRequestModel',
          type: {
            name: 'Composite',
            class_name: 'InsertGroupRequestModel',
            model_properties: {
              name: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Name',
                type: {
                  name: 'String'
                }
              },
              type: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Type',
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