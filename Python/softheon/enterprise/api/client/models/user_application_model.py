# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class UserApplicationModel(Model):
    """The model that is sent in response to a GET request for UserApplication
    associations.

    :param user_id: Gets or sets the user identifier.
    :type user_id: int
    :param user_full_name: Gets or sets the full name of the user.
    :type user_full_name: str
    :param application_id: Gets or sets the application identifier.
    :type application_id: int
    :param application_name: Gets or sets the name of the application.
    :type application_name: str
    :param acl: Gets or sets the access control level permissions.
    :type acl: int
    """

    _validation = {
        'user_full_name': {'max_length': 255, 'min_length': 0},
        'application_name': {'max_length': 255, 'min_length': 0},
    }

    _attribute_map = {
        'user_id': {'key': 'UserID', 'type': 'int'},
        'user_full_name': {'key': 'UserFullName', 'type': 'str'},
        'application_id': {'key': 'ApplicationID', 'type': 'int'},
        'application_name': {'key': 'ApplicationName', 'type': 'str'},
        'acl': {'key': 'Acl', 'type': 'int'},
    }

    def __init__(self, user_id=None, user_full_name=None, application_id=None, application_name=None, acl=None):
        super(UserApplicationModel, self).__init__()
        self.user_id = user_id
        self.user_full_name = user_full_name
        self.application_id = application_id
        self.application_name = application_name
        self.acl = acl
