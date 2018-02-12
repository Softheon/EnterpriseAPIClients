# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class GetAssociationRequestModel(Model):
    """Model for the GET Association input parameters.

    :param acl: Gets or sets the access control level permissions.
    :type acl: int
    :param page: Gets or sets the page number.
    :type page: int
    :param page_size: Gets or sets the size of the page.
    :type page_size: int
    :param sort_order: Gets or sets the order. Possible values include:
     'Unspecified', 'Ascending', 'Descending'
    :type sort_order: str or ~softheon.enterprise.api.client.models.enum
    :param sort_by: Gets or sets the column to order by. Possible values
     include: 'Unspecified', 'DrawerID', 'ApplicationID', 'GroupID', 'UserID',
     'QueueID', 'Acl'
    :type sort_by: str or ~softheon.enterprise.api.client.models.enum
    """

    _validation = {
        'page': {'maximum': 2147483647, 'minimum': 1},
        'page_size': {'maximum': 1000, 'minimum': 1},
    }

    _attribute_map = {
        'acl': {'key': 'Acl', 'type': 'int'},
        'page': {'key': 'Page', 'type': 'int'},
        'page_size': {'key': 'PageSize', 'type': 'int'},
        'sort_order': {'key': 'SortOrder', 'type': 'str'},
        'sort_by': {'key': 'SortBy', 'type': 'str'},
    }

    def __init__(self, acl=None, page=None, page_size=None, sort_order=None, sort_by=None):
        super(GetAssociationRequestModel, self).__init__()
        self.acl = acl
        self.page = page
        self.page_size = page_size
        self.sort_order = sort_order
        self.sort_by = sort_by
