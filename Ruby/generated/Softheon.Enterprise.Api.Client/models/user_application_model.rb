# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # The model that is sent in response to a GET request for UserApplication
    # associations
    #
    class UserApplicationModel
      # @return [Integer] Gets or sets the user identifier.
      attr_accessor :user_id

      # @return [String] Gets or sets the full name of the user.
      attr_accessor :user_full_name

      # @return [Integer] Gets or sets the application identifier.
      attr_accessor :application_id

      # @return [String] Gets or sets the name of the application.
      attr_accessor :application_name

      # @return [Integer] Gets or sets the access control level permissions.
      attr_accessor :acl


      #
      # Mapper for UserApplicationModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'UserApplicationModel',
          type: {
            name: 'Composite',
            class_name: 'UserApplicationModel',
            model_properties: {
              user_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'UserID',
                type: {
                  name: 'Number'
                }
              },
              user_full_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'UserFullName',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              application_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ApplicationID',
                type: {
                  name: 'Number'
                }
              },
              application_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ApplicationName',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              acl: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Acl',
                type: {
                  name: 'Number'
                }
              }
            }
          }
        }
      end
    end
  end
end
