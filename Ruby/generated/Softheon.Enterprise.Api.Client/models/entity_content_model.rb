# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Entity Content Model
    #
    class EntityContentModel
      # @return [Enum] Gets or sets the content of the entity. Possible values
      # include: 'None', 'All', 'Profiles', 'Attachments', 'Notes', 'Links',
      # 'Events'
      attr_accessor :entity_content


      #
      # Mapper for EntityContentModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'EntityContentModel',
          type: {
            name: 'Composite',
            class_name: 'EntityContentModel',
            model_properties: {
              entity_content: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EntityContent',
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
