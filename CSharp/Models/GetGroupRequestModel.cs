// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Microsoft.Rest;
    using Newtonsoft.Json;
    using System.Linq;

    /// <summary>
    /// Model for the GET Group input parameters
    /// </summary>
    public partial class GetGroupRequestModel
    {
        /// <summary>
        /// Initializes a new instance of the GetGroupRequestModel class.
        /// </summary>
        public GetGroupRequestModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the GetGroupRequestModel class.
        /// </summary>
        /// <param name="id">Gets or sets the group identifier.</param>
        /// <param name="userID">Gets or sets the user identifier.</param>
        /// <param name="name">Gets or sets the name.</param>
        /// <param name="type">Gets or sets the type. Possible values include:
        /// 'Generic', 'Access', 'Role'</param>
        /// <param name="state">Gets or sets the state. Possible values
        /// include: 'Inactive', 'Active'</param>
        /// <param name="page">Gets or sets the page number.</param>
        /// <param name="pageSize">Gets or sets the size of the page.</param>
        /// <param name="sortOrder">Gets or sets the order. Possible values
        /// include: 'Unspecified', 'Ascending', 'Descending'</param>
        /// <param name="sortBy">Gets or sets the column to order by. Possible
        /// values include: 'ID', 'Name', 'Type', 'State'</param>
        public GetGroupRequestModel(int? id = default(int?), int? userID = default(int?), string name = default(string), string type = default(string), string state = default(string), int? page = default(int?), int? pageSize = default(int?), string sortOrder = default(string), string sortBy = default(string))
        {
            ID = id;
            UserID = userID;
            Name = name;
            Type = type;
            State = state;
            Page = page;
            PageSize = pageSize;
            SortOrder = sortOrder;
            SortBy = sortBy;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the group identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ID")]
        public int? ID { get; set; }

        /// <summary>
        /// Gets or sets the user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "UserID")]
        public int? UserID { get; set; }

        /// <summary>
        /// Gets or sets the name.
        /// </summary>
        [JsonProperty(PropertyName = "Name")]
        public string Name { get; set; }

        /// <summary>
        /// Gets or sets the type. Possible values include: 'Generic',
        /// 'Access', 'Role'
        /// </summary>
        [JsonProperty(PropertyName = "Type")]
        public string Type { get; set; }

        /// <summary>
        /// Gets or sets the state. Possible values include: 'Inactive',
        /// 'Active'
        /// </summary>
        [JsonProperty(PropertyName = "State")]
        public string State { get; set; }

        /// <summary>
        /// Gets or sets the page number.
        /// </summary>
        [JsonProperty(PropertyName = "Page")]
        public int? Page { get; set; }

        /// <summary>
        /// Gets or sets the size of the page.
        /// </summary>
        [JsonProperty(PropertyName = "PageSize")]
        public int? PageSize { get; set; }

        /// <summary>
        /// Gets or sets the order. Possible values include: 'Unspecified',
        /// 'Ascending', 'Descending'
        /// </summary>
        [JsonProperty(PropertyName = "SortOrder")]
        public string SortOrder { get; set; }

        /// <summary>
        /// Gets or sets the column to order by. Possible values include: 'ID',
        /// 'Name', 'Type', 'State'
        /// </summary>
        [JsonProperty(PropertyName = "SortBy")]
        public string SortBy { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (ID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "ID", 2147483647);
            }
            if (ID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "ID", 1);
            }
            if (UserID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "UserID", 2147483647);
            }
            if (UserID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "UserID", 1);
            }
            if (Name != null)
            {
                if (Name.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Name", 255);
                }
                if (Name.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Name", 0);
                }
            }
            if (Page > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "Page", 2147483647);
            }
            if (Page < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "Page", 1);
            }
            if (PageSize > 1000)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "PageSize", 1000);
            }
            if (PageSize < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "PageSize", 1);
            }
        }
    }
}
